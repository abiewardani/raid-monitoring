<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/



	public function index()
	{
        $monitor = Monitor::groupby("ip")->get();

        $item = array();
        foreach($monitor as $key => $val){
            $data = Monitor::where("ip","=", $val->ip)->get();
            $total = count($data);
            $activePercent = $this->countActivePercent($data,$total);
            $degrededPercent = $this->countDegrededPercent($data,$total);
            $buffer = array("ip" => $val->ip, "activePercent" => $activePercent, "degrededPercent" => $degrededPercent);
            array_push($item,$buffer);
        }
        $json = json_encode($item);
        return View::make('home',compact('monitor','item','json'));
	}


    public function detail()
    {
        $ip = Input::get("ip");
        $monitor = Monitor::groupby("level")->where("ip","=",$ip)->get();

        $item = array();
        foreach($monitor as $key => $val){
            $data = Monitor::where("level","=", $val->level)->get();
            $total = count($data);
            $activePercent = $this->countActivePercent($data,$total);
            $degrededPercent = $this->countDegrededPercent($data,$total);
            $buffer = array("level" => $val->level, "activePercent" => $activePercent, "degrededPercent" => $degrededPercent);
            array_push($item,$buffer);
        }
        $json = json_encode($item);
        return View::make('detail',compact('monitor','item','json'));
    }

    public function countActivePercent($data,$total_rows){
        $no = 0;
        foreach($data as $key => $val){
            if($val->status=="active"){
                $no ++;
            }
        }
        $percent = ($no / $total_rows) * 100;
        return $percent;
    }

    public function countDegrededPercent($data,$total_rows){
        $no = 0;
        foreach($data as $key => $val){
            if($val->status=="degreded"){
                $no ++;
            }
        }
        $percent = ($no / $total_rows) * 100;
        return $percent;
    }

    public function sync(){
        $file =  public_path().'/raid/raid.json';

        $string = file_get_contents($file);
        $json = json_decode($string, true);

        foreach ($json as $key => $val) {
            Monitor::insert(
                array("ip"=> $val['ip'],
                    "status" => $val['status'],
                    "level" => $val['level'],
                    "partition_hardisk" => $key
                )
            );
        }
     }


}
