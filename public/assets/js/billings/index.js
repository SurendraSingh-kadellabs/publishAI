$(document).ready(function()
{
    "use strict";

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    // ---------------- Data Table Code  ----------------------->>
    $.fn.dataTable.ext.errMode = 'throw';

    let taskDataTable = $('#billsDataTable').DataTable({
        serverSide: true,
        ajax: quickRecruitSpace.billingRoute,
        searching: true,
        processing: true,
        responsive: true,
        columns: [
            {data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false},
            {data: 'invoice_code', name: 'invoice_code'},
            {data: 'issue_date', name: 'issue_date'},
            {data: 'client_name', name: 'client.name'},
            {data: 'creator_name', name: 'creator.name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        "order": [[0, "asc"]]
    });

    $.modalCallBackOnAnyChange = function () {
        taskDataTable.draw(false);
    }
});
