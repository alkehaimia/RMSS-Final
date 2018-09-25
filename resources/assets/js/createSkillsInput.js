<script type="text/javascript">
    $(document).ready(function(){
      var postURL = "<?php echo url('showProfile'); ?>";
      var i=1;
      $('#add').click(function(){
           i++;
           $('#get_dynemic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="skill[]" placeholder="Enter your skill" class="form-control skill_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });

      $(document).on('click', '.btn_remove', function(){
           var livebtn_id = $(this).attr("id");
           $('#row'+livebtn_id+'').remove();
      });
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#submit').click(function(){
           $.ajax({
                url:postURL,
                method:"POST",
                data:$('#add_skill').serialize(),
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_skill')[0].reset();
                        $(".live-success-message").find("ul").html('');
                        $(".live-success-message").css('display','block');
                        $(".live-error-message").css('display','none');
                        $(".live-success-message").find("ul").append('<li>some Record Inserted Successfully.</li>');
                    }
                }
           });
      });

      function printErrorMsg (msg) {
         $(".live-error-message").find("ul").html('');
         $(".live-error-message").css('display','block');
         $(".live-success-message").css('display','none');
         $.each( msg, function( key, value ) {
            $(".live-error-message").find("ul").append('<li>'+value+'</li>');
         });
      }
    });
</script>


/*
<script>
  function addFields(){

    var number = document.getElementbyId("numberOfSkills").value;

    var container = document.getElementbyId("addSkillsField");

    for (i = 0; i < number; i++)
    {
      container.appendChild(document.createTextNode(i + 1));
      var input = document.createElement("input");
      input.type = "text";
      input.name = "skill" + i;
      input.placeholder = "Skill" + i;
      container.appendChild(input);
      container.appendChild(document.createElement("br"));
    }
}
</script>
*/
