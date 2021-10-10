<?php echo $header; ?>
<?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
      </div>
      <h1><?php echo $text_list; ?></h1>
      <ul class="breadcrumb">
        <li><?php echo $text_list; ?></li>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title p-3"><i class="fa fa-list "></i><?php echo $text_list;?> </h3>
      </div>
      <div class="panel-body">
        <div class="well">
          <div class="row">
            <div class="col-sm-6">
              <!--<div class="form-group">
                <label class="control-label" for="input-product"><?php echo $entry_product; ?></label>
                <input type="text" name="filter_product" value="<?php echo $filter_product; ?>" placeholder="<?php echo $entry_product; ?>" id="input-product" class="form-control" />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-author"><?php echo $entry_author; ?></label>
                <input type="text" name="filter_author" value="<?php echo $filter_author; ?>" placeholder="<?php echo $entry_author; ?>" id="input-author" class="form-control" />
              </div>-->
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="control-label" ><?php echo $items[0]['titel']; ?></label>
                <select name="items" id="input-status" class="form-control">
                  <option value="*"></option>for="input-status"for="input-status"
                  <?php if (isset($items)) {
                     for($i=0;$i<count($items);$i++){?>
                      <option value="<?php echo $i;?>" selected="selected"><?php echo $items[$i]['titel']; ?></option>
                  <?php }
                  }  else { ?>
                      <option value="."><?php echo $text_error; ?></option>
                  <?php } ?>
                </select><!---->
              </div>
              <div class="form-group text-center border border-primary">
                <?php if($res==true){?>
                <div class="alert alert-success"></div>
                <h1 class="p-3"><?php echo $titel2; ?></h1>
                
                 <form action="<?php echo $form_add;?>" method="post" class="text-center ">
                 
                  <input type="hidden" value="<?php echo $id; ?>"/>
                  <input type="text" class="control-input m-3"  placeholder="<?php echo $input_name;?>" /><br/>
                  <input type="submit" class="btn btn-primary " value="<?php echo $submit;?>"/>
                 

                 </form>
            
          </div>
        </div>
        <form action="<?php echo $delete; ?>" method="post" enctype="multipart/form-data" id="form-review">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
             <!-- <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-left"><?php if ($sort == 'pd.name') { ?>
                    <a href="<?php echo $sort_product; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_product; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_product; ?>"><?php echo $column_product; ?></a>
                    <?php } ?></td>
                  <td class="text-left"><?php if ($sort == 'r.author') { ?>
                    <a href="<?php echo $sort_author; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_author; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_author; ?>"><?php echo $column_author; ?></a>
                    <?php } ?></td>
                  <td class="text-right"><?php if ($sort == 'r.rating') { ?>
                    <a href="<?php echo $sort_rating; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_rating; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_rating; ?>"><?php echo $column_rating; ?></a>
                    <?php } ?></td>
                  <td class="text-left"><?php if ($sort == 'r.status') { ?>
                    <a href="<?php echo $sort_status; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_status; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_status; ?>"><?php echo $column_status; ?></a>
                    <?php } ?></td>
                  <td class="text-left"><?php if ($sort == 'r.date_added') { ?>
                    <a href="<?php echo $sort_date_added; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_date_added; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_date_added; ?>"><?php echo $column_date_added; ?></a>
                    <?php } ?></td>
                  <td class="text-right"><?php echo $column_action; ?></td>
                </tr>-->
              </thead>
              <tbody>
               <!-- <?php if ($reviews) { ?>
                <?php foreach ($reviews as $review) { ?>
                <tr>
                  <td class="text-center"><?php if (in_array($review['review_id'], $selected)) { ?>
                    <input type="checkbox" name="selected[]" value="<?php echo $review['review_id']; ?>" checked="checked" />
                    <?php } else { ?>
                    <input type="checkbox" name="selected[]" value="<?php echo $review['review_id']; ?>" />
                    <?php } ?></td>
                  <td class="text-left"><?php echo $review['name']; ?></td>
                  <td class="text-left"><?php echo $review['author']; ?></td>
                  <td class="text-right"><?php echo $review['rating']; ?></td>
                  <td class="text-left"><?php echo $review['status']; ?></td>
                  <td class="text-left"><?php echo $review['date_added']; ?></td>
                  <td class="text-right"><a href="<?php echo $review['edit']; ?>" data-toggle="tooltip" title="<?php echo $button_edit; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                </tr>
                <?php } ?>
                <?php } else { ?>
                <tr>
                  <td class="text-center" colspan="7"><?php echo $text_no_results; ?></td>
                </tr>
                <?php } ?>-->
              </tbody>
            </table>
          </div>
        </form>
        <div class="row">
          <div class="col-sm-6 text-left"></div>
          <div class="col-sm-6 text-right"></div>
        </div>
      </div>
    </div>
  </div>
