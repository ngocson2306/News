                
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add Article</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <?php echo validation_errors(); ?>
                                <form  action="" method="POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name " name="title" value="<?php echo set_value('title', ''); ?>">

                                        </div>
                                       <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter your Description" name="description"  ><?php echo set_value('description', ''); ?></textarea>
                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                                        <a href="viewArticle"><input type="button" value="Cancel" name="Cancel" class="btn btn-danger"></a>
                                        <!-- <button type="submit" class="btn btn-primary" value="submit">Submit</button> -->
                                    </div>
                                </form>
                            </div><!-- /.box -->

                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
              