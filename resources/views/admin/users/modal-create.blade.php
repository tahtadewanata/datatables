<!-- Modal add user -->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="control-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="isi dengan nama anda">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-name"></div>
                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="isi dengan email anda">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-email"></div>
                </div>

                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-password"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="btn_simpan">SIMPAN</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create post event
    $('body').on('click', '#btn_create_user', function() {

        //open modal
        $('#modal-create').modal('show');
    });

    //action create post
    $('#btn_simpan').click(function(e) {
        e.preventDefault();

        //define variable
        let name = $('#nama').val();
        let email = $('#email').val();
        let pass = $('#password').val();
        let token = $("meta[name='csrf-token']").attr("content");
        
        //ajax
        let form_data = new FormData();
        form_data.append('nama', name);
        form_data.append('email', email);
        form_data.append('password', pass);
        
        $.ajax({
            url: `/pengguna`,
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: form_data,
            success: function(response) {

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let user = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.id}</td>
                        <td>${response.data.name}</td>
                        <td>${response.data.email}</td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                `;

                //append to table
                $('#table-users').prepend(user);

                //clear form
                $('#nama').val('');
                $('#email').val('');
                $('#password').val('');

                //close modal
                $('#modal-create').modal('hide');


            },
            error: function(error) {

                if (!email) {
                    toastr.error(email, 'Wajib isi Email', {timeOut: 5000});
                }
                if (!name) {
                    toastr.error(name, 'Wajib isi nama', {timeOut: 5000});
                }

            }

        });

    });
</script>
