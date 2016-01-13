                            <div class="card">

                                <div class="card-body">                                    
                                    <table id="table_data" class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <?php foreach( $table_header as $item ) : ?>
                                                    <th><?php echo $item; ?></th>
                                                <?php endforeach; ?> 
                                                <th>Action</th>                                               
                                            </tr>
                                        </thead>
                                        
                                        <tfoot>
                                            <tr>
                                              <?php foreach( $table_header as $item ) : ?>
                                                    <th><?php echo $item; ?></th>
                                                <?php endforeach; ?> 
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        
                                        <tbody>

                                            
                                            <?php foreach ( $data as $item ) : ?>   
                                                
                                                <tr>               
                                                                                     
                                                    <td><?php echo date_format( date_create( $item->tiket_time ), 'Y-m-d' ); ?></td>
                                                    <td><?php echo ( ! is_null( $item->tiket_close ) ? date_format( date_create( $item->tiket_close ), 'Y-m-d' ) : '' ); ?></td>
                                                    <td><?php echo $item->username; ?></td>
                                                    <td><?php echo $item->nama_institusi; ?></td>
                                                    <td><?php echo $item->nama_aplikasi; ?></td>
                                                    <td><?php echo $item->kategori_helpdesk; ?></td>
                                                    <td><?php echo $item->jalur; ?></td>
                                                    <td><?php echo $item->status_tiket; ?></td>
                                                    <td>
                                                        <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modalInfo" hrefx="<?php echo site_url( $controller . '/edit/' . $item->id ); ?>" title="Edit"><i class="glyphicon glyphicon-edit"></i> </a> 
                                                        <a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modalDelete"  hrefx="<?php echo site_url( $controller . '/delete/' . $item->id ); ?>" title="Delete"><i class="glyphicon glyphicon-trash"></i> </a> 
                                                    </td>
                                                </tr>
                                                
                                            <?php endforeach; ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

