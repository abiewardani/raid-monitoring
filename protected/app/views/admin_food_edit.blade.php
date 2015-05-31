@include('template.header')

<div class="global-wrap">




<div class="container" style="background: #ffffff;">
    <div class="row" style="background: #ffffff; min-height: 400px;">
        <div class="col-md-10 col-md-offset-1" style="background: #ffffff;">

            <div class="row row-wrap"  style="background: #ffffff;">
            <br><br>
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>{{ Session::get('success') }}</h2>
                </div>
            @endif
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo url(); ?>/admin/food/update">

                 <?php foreach ($food->get() as $item): ?>
                 <div class="form-group">
                <label class="col-sm-2 control-label">Title Food</label>
               <div class="col-sm-10">
                 <input type="text" name="title" class="form-control" value="{{ $item->title }}" id="title">
               </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">Description</label>
               <div class="col-sm-10">
                 <textarea placeholder="description" class="form-control" name="description" id="description" >{{ $item->description }}</textarea>
               </div>
              </div>

               <div class="form-group">
                             <label class="col-sm-2 control-label">Image</label>
                           <div class="col-sm-10">
                             <input name="image" type="file" />
                           </div>
                          </div>
                 <input type="hidden" name="id" class="form-control" value="{{ $item->id }}" id="id">
              <div class="form-group">
               <label class="col-sm-2 control-label"></label>
               <div class="col-sm-10">
                 <button type="submit" class="btn btn-default" >Save</button>
                 </div>
               </div>
                 <?php endforeach; ?>
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