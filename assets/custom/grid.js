$(function() {
  $.ajax({
    type: "GET",
    url: "Kustomer/getAll/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: $(window).height(),
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "Kustomer/getAll/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Kustomer/add/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Kustomer/update/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "Kustomer/delete/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "nama",
          title: "Nama",
          type: "text",
          width: 150
        },
        {
          name: "alamat",
          title: "alamat",
          type: "text",
          width: 150
        },
        {
          name: "notelp",
          title: "notelp",
          type: "text",
          width: 150
        },
        {
          name: "username",
          title: "username",
          type: "text",
          width: 150
        },
        {
          name: "password",
          title: "password",
          type: "text",
          width: 150
        },

        { type: "control" }
      ]
    });
  });
});
