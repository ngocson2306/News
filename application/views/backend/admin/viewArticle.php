          
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                           <div class="box">
                            <?php 
                            /*Hien thong bao loi */
                             
                                            
                                    
                                $message_flash = $this->session->flashdata('message_flash');

                                $str_message_success = '<div class="alert alert-success alert-dismissable">
                                                <i class="fa fa-check"></i>
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <b>Info!</b> '.$message_flash['message'].'
                                                </div>';
                                $str_message_error = '<div class="alert alert-danger alert-dismissable">
                                        <i class="fa fa-ban"></i>
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b>'.$message_flash['message'].'
                                    </div>';

                                if (isset($message_flash) && count($message_flash) > 0 ) {
                                    if ($message_flash['type'] == 'successfull') {      
                                        echo $str_message_success;
                                    }else{
                                        echo $str_message_error;
                                    }
                                }
                                
                             ?>
                            <form action="" method="POST"   >
                                <div class="box-header">
                                    <h3 class="box-title">Danh sach danh muc</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox"  id="selectall" /></th>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Public</th>
                                                <th>Create_day</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $str_data = '';
                                                if(isset($list_article) && !empty($list_article)){
                                                    foreach ($list_article as $key => $value) {

                                                     $icon_pub = ($value['public'] == 0) ? '<i class="fa fa-times fa-lg" style="color:red"></i>':'<i class="fa fa-check fa-lg" style="color:green"></i>';
                                                     $str_data .= '<tr>
                                                                    <td><input type="checkbox" name="checkbox[]" class="checkbox1" value="'.$value['type_id'].'"/></td>
                                                                    <td>'.$value['type_id'].'</td>
                                                                    <td>'.$value['type_name'].'</td>
                                                                    <td>'.$value['type_des'].'</td>
                                                                    <td>'.$icon_pub.'</td>
                                                                    <td>'.gmdate('H:m:s d-m-Y',strtotime($value['type_date'])).'</td>
                                                                    <td>
                                                                        <a href=""><i class="fa fa-fw fa-pencil"></i></a>
                                                                        <a href="delArticle/'.$value['type_id'].'"><i class="fa fa-trash-o"></i></a>
                                                                    </td>
                                                                    </tr>';
                                                    }
                                                    echo $str_data;
                                                }

                                             ?>
                                           
                                            
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                         <a href="addArticle"><input type="button" value="Add new" name="Add new" class="btn btn-primary"></a>
                                         <input type="submit" value="Delete all" name="submit" class="btn btn-primary">
                                </div><!-- /.box-body -->
                                </form>
                            </div>   

                     </div>
                    </div>

            </section><!-- /.content -->