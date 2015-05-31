@include('template.header')

<div class="global-wrap">

<div class="container" style="background: #ffffff;">
    <div class="row" style="background: #ffffff;">
        <div class="col-md-10 col-md-offset-1" style="background: #ffffff; min-height: 400px;">

            <div class="row row-wrap"  style="background: #ffffff;">
            <br><br>
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>{{ Session::get('success') }}</h2>
                </div>
            @endif
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo url(); ?>/admin/food/save">
              <div class="form-group">
                <label class="col-sm-2 control-label">Title Food</label>
               <div class="col-sm-10">
                 <input type="text" name="title" class="form-control" id="title">
               </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">Description</label>
               <div class="col-sm-10">
                 <textarea placeholder="description" class="form-control" name="description" id="description" ></textarea>
               </div>
              </div>
              <div class="form-group">
               <label class="col-sm-2 control-label">Image</label>
             <div class="col-sm-10">
               <input name="image" type="file" />
             </div>
            </div>

              <div class="form-group">
               <label class="col-sm-2 control-label"></label>
               <div class="col-sm-10">
                 <button type="submit" class="btn btn-default" >Save</button>
                 </div>
               </div>

            </form>



            </div>
        </div>
    </div>
    <div class="gap"></div>
</div>
<!-- //////////////////////////////////
//////////////END PAGE CONTENT/////////
////////////////////////////////////-->



<!-- //////////////////////////////////
//////////////MAIN FOOTER//////////////
////////////////////////////////////-->
@include('template.footer')