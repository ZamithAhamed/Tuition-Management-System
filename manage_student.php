<?php 
include 'db_connect.php'; 
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM student where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
    $$k=$val;
}
}
?>
<div class="container-fluid">
    <form action="" id="manage-student">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
        <div id="msg" class="form-group"></div>
        <div class="form-group">
            <label for="id_no" class="control-label">Id No.</label>
            <input id="id_no"type="text" class="form-control" name="id_no"  value="<?php echo isset($id_no) ? $id_no :'' ?>" required>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input id="name"type="text" class="form-control" name="name"  value="<?php echo isset($name) ? $name :'' ?>" required>
        </div>
        <div class="form-group">
            <label for="contact" class="control-label">Contact</label>
            <input id="contact" type="text" class="form-control" name="contact"  value="<?php echo isset($contact) ? $contact :'' ?>" required>
        </div>
        <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input id="email" type="email" class="form-control" name="email"  value="<?php echo isset($email) ? $email :'' ?>" required>
        </div>
        <div class="form-group">
            <label for="address" class="control-label">Address</label>
            <textarea id="address"name="address" id="" cols="30" rows="3" class="form-control" required><?php echo isset($address) ? $address :'' ?></textarea>
        </div>
    </form>
</div>

<script type="text/javascript">
    function validate(){
        //Contact Validation
        if(document.getElementById("id_no").value == ""){
            alert_toast("Please Enter ID Number",'warning')
            end_load()
            return false;
        }

        if(document.getElementById("name").value == ""){
            alert_toast("Please Enter Name",'warning')
            end_load()
            return false;
        }

        if(document.getElementById("contact").value == ""){
            alert_toast("Please Enter Contact Number",'warning')
            end_load()
            return false;
        }

        if(document.getElementById("email").value == ""){
            alert_toast("Please Enter E-mail",'warning')
            end_load()
            return false;
        }

        if(document.getElementById("address").value == ""){
            alert_toast("Please Enter Address",'warning')
            end_load()
            return false;
        }

    }

</script>

<script>
    $('#manage-student').on('reset',function(){
        $('#msg').html('')
        $('input:hidden').val('')
    })
    $('#manage-student').submit(function(e){
        e.preventDefault()
        start_load()
        $('#msg').html('')


        if(document.getElementById("id_no").value == ""){
            alert_toast("Please Enter ID Number",'warning')
            end_load()
            return false;
        }

        var regex = /^[0-9]+$/ ;
        if(!regex.test(document.getElementById("id_no").value)){
            alert_toast("Invalid ID Number",'danger')
            end_load()
            return false;
        }

        if(document.getElementById("name").value == ""){
            alert_toast("Please Enter Name",'warning')
            end_load()
            return false;
        }

        if(document.getElementById("contact").value == ""){
            alert_toast("Please Enter Contact Number",'warning')
            end_load()
            return false;
        }

    
        //contact validation
        var regex = /^[0][0-9]{9}$/ ;
        if(!regex.test(document.getElementById("contact").value)){
            alert_toast("Invalid Contact Number",'danger')
            end_load()
            return false;
        }

        if(document.getElementById("email").value == ""){
            alert_toast("Please Enter E-mail",'warning')
            end_load()
            return false;
        }
        
        //emial validation
        var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
        if(!regex.test(document.getElementById("email").value)){
                alert_toast("Invalid Email",'danger')
                end_load()
                return false;
        }

        if(document.getElementById("address").value == ""){
            alert_toast("Please Enter Address",'warning')
            end_load()
            return false;
        }


        $.ajax({
            url:'ajax.php?action=save_student',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success:function(resp){
                if(resp==1){
                    alert_toast("Data successfully saved.",'success')
                        setTimeout(function(){
                            location.reload()
                        },1000)
                }else if(resp == 2){
                $('#msg').html('<div class="alert alert-danger mx-2">ID # already exist.</div>')
                end_load()
                }   
            }
        })
    })

    $('.select2').select2({
        placeholder:"Please Select here",
        width:'100%'
    })
</script>