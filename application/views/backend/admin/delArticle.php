                
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Delete Article</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <?php 
                                    if (isset($str_error)) {
                                        echo $str_error;
                                    }
                                 ?>
                                <form  action="" method="POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name " name="title" value="<?php echo $article_cat['type_name']; ?>" disabled>

                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <input type="submit" value="Delete" name="submit" class="btn btn-primary">
                                        <a href="viewArticle"><input type="button" value="Cancel" name="Cancel" class="btn btn-danger"></a>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
              