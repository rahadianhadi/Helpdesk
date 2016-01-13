<!-- Modal -->
<div class="modal fade" id="modalDefault" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <form class="form-horizontal" id="form_add">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Tiket</h4>
                </div>
                
                <div class="modal-body">      
                    <?php echo validation_errors(); ?>                         
                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">User</label>   
                        <div class="col-sm-4">                            
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nama pengguna atau NIK" value="<?php echo set_value('username'); ?>">
                        </div>

                        <label for="telepon" class="col-sm-2 control-label">Telepon</label>
                        <div class="col-sm-4">                            
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon Pengguna">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="institusi" class="col-sm-2 control-label">Institusi</label>   
                        <div class="col-sm-4">                            
                            <select class="form-control"  id="institusi" name="institusi" style="width: 270px">
                               <?php foreach( $data_institusi as $item ) : ?>
                                    <option value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                               <?php endforeach; ?>                              
                            </select>
                        </div>

                        <label for="aplikasi" class="col-sm-2 control-label">Aplikasi</label>
                        <div class="col-sm-4">                            
                            <select class="form-control"  id="aplikasi" name="aplikasi" style="width: 270px">
                                 <?php foreach( $data_aplikasi as $item ) : ?>
                                    <option value="<?php echo $item->id; ?>"><?php echo $item->tipe_app; ?></option>
                               <?php endforeach; ?>                             
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Kategori</label>   
                        <div class="col-sm-4">                            
                            <select class="form-control"  id="kategori" name="kategori" style="width: 270px">
                               <?php foreach( $data_kategori as $item ) : ?>
                                    <option value="<?php echo $item->id; ?>"><?php echo $item->tipe_kategori; ?></option>
                               <?php endforeach; ?>                              
                            </select>
                        </div>

                        <label for="jalur_helpdesk" class="col-sm-2 control-label">Jalur Helpdesk</label>
                        <div class="col-sm-4">                            
                            <select class="form-control"  id="jalur_helpdesk" name="jalur_helpdesk" style="width: 270px">
                                 <?php foreach( $data_jalur_helpdesk as $item ) : ?>
                                    <option value="<?php echo $item->id; ?>"><?php echo $item->jalur; ?></option>
                               <?php endforeach; ?>                             
                            </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>   
                        <div class="col-sm-10">                            
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" cols="60"></textarea>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="status_tiket" class="col-sm-2 control-label">Status</label>   
                        <div class="col-sm-5">                            
                             <select class="form-control"  id="status_tiket" name="status_tiket" style="width: 270px">
                               <?php foreach( $data_status_tiket as $item ) : ?>
                                    <option value="<?php echo $item->id; ?>"><?php echo $item->kategori; ?></option>
                               <?php endforeach; ?>                              
                            </select>
                        </div>
                    </div>                                                  
                </div>
                <div class="modal-footer">                    
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
   

    $('#form_add').validate({ // initialize the plugin
        rules: {
            username: {
                required: true
            }
        },
        submitHandler: function (form) { 
            $.ajax({
                type: "POST",
                url: "<?php echo base_url( $controller . '/save' ); ?>",
                data: { 'username'  : $('#username').val(),
                        'telepon'   : $('#telepon').val(),
                        'institusi' : $('#institusi').val(),
                        'aplikasi' : $('#aplikasi').val(),
                        'kategori' : $('#kategori').val(),
                        'jalur_helpdesk' : $('#jalur_helpdesk').val(),
                        'deskripsi' : $('#deskripsi').val(),
                        'status_tiket' : $('#status_tiket').val(),
                      },
                success: function(response)
                { 
                    //$('#form_container').html(response); 
                    alert('Succes: ' + response );
                    //console.log( $( this ).serialize() );
                    clearForm('#form_add');
                },
                error: function()
                {
                    alert('Error');
                }
            }); 

            $('#modalDefault').modal('toggle');

            return false; // for demo
        }
    });

    function clearForm(form)
    {
        $(":input", form).each(function()
        {
        var type = this.type;
        var tag = this.tagName.toLowerCase();
        if (type == 'text' || type == 'textarea' )
            {
                this.value = "";
            }
        });
    };
</script>
