$(document).ready(function () {

    "use strict";

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    // ---------------- Data Table Code  ----------------------->>
    $.fn.dataTable.ext.errMode = 'throw';

    let dataTable = $('#companiesDataTable').DataTable({
        serverSide: true,
        ajax: quickRecruitSpace.route,
        searching: true,
        processing: true,
        responsive: true,
        columns: [
            {data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false},
            {data: 'company_name', name: 'user.name'},
            {data: 'phone', name: 'phone'},
            {data: 'company_email', name: 'user.email'},
            {data: 'website', name: 'website'},
            {data: 'address', name: 'address'},
            {data: 'company_activated', name: 'user.activated'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "order": [[0, "asc"]]
    });

    $.modalCallBackOnAnyChange = function () {
        dataTable.draw(false);
    }
});

