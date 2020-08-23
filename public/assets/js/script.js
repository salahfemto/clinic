function addInfo(id) {

   $("#exampleModalCenter").modal("show");

   $("#exampleModalCenter input[name=id]").val(id);

   $("ajax2").load("getInfo/" + id, function (data) {

      $("#exampleModalCenter textarea").fadeIn();
      $("#exampleModalCenter textarea").val(data);

   });

}