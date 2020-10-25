$(document).ready(function () {

    $('.btndelete').click(function () {

        //console.log("ทดสอบการกดปุ่มนะคร้าบ");

        var id_member = $(this).attr('id');
        var id_room = $(this).attr('numberroom');

        console.log("id_member = " + id_member);
        console.log(id_room);
        $('.cfdelete').click(function () {
            $.ajax({
                url: "deleteMember.php",
                type: "post",
                data: { id_member: id_member, id_room: id_room },
                success: function (data) {

                    // console.log(id_member);
                    //window.location = "deleteMember.php";
                    window.location.reload();
                }
            });
        });

    });


    $('.btnupdate').click(function () {

        var id_member = $(this).attr('id');
        var oldroom = $(this).attr('oldroom');


        console.log("TEST การกดซะหน่อย");
        console.log(id_member);
        console.log(oldroom);

        $tr = $(this).closest("tr");
        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);
        $('#update').modal('show');

        $('#id_memberu').val(data[0]);
        $('#id_cardu').val(data[1]);
        $('#nameu').val(data[2]);
        $('#surnameu').val(data[3]);
        $('#roomselectu').val(data[4]);
        $('#typecaru').val(data[5]);
        $('#plateu').val(data[6]);
        $('#phoneu').val(data[7]);
        $('#datestartu').val(data[8]);

    });

    $('.btndeleteBill').click(function () {

        console.log("ทดสอบการกดปุ่มนะคร้าบ");
        var id_bill = $(this).attr('id');
    
        $('.cfdeleteBill').click(function(){

            window.location.replace = "deleteBill.php?id"+id_bill;


        });


    });








    $('#viewdata').DataTable();
    $('#viewRoom').DataTable();
    $('#viewChash').DataTable();

});