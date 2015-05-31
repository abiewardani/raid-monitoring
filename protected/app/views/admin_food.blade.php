@include('template.header')


<div class="container" style="background: #ffffff;">
    <div class="row" style="background: #ffffff;">
        <div class="col-md-10 col-md-offset-1" style="background: #ffffff;">

            <div class="row row-wrap"  style="background: #ffffff;">
            <br><br>
             <a href="<?php echo url(); ?>/admin/food/add" class="btn btn-default">Add</a><br><br>
                    <table class="table table-bordered">
                    <tr>
                    <td >No</td>
                      <td >Title</td>
                      <td>Description</td>
                      <td>Action</td>
                    </tr>
                  <?php
                  $no = 1;
                  foreach ($food as $item): ?>
                  <tr>
                  <td>{{ $no }}</td>
                    <td>{{ substr($item->title,0,13) }}</td>
                    <td>{{ substr($item->description,0,120) }} </td>
                     <td> <a href="<?php echo url(); ?>/admin/food/edit?id=<?php echo $item->id;?>" class="btn btn-default">Edit </a> | <a href="<?php echo url(); ?>/admin/food/delete?id=<?php echo $item->id;?>" class="btn btn-default">Delete</a></td>
                  </tr>
                  <?php
                   $no++;
                   endforeach; ?>
                   </table>

            </div>
         <div class="text-center" style="background: #ffffff;">
            <?php echo $food->links(); ?>
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