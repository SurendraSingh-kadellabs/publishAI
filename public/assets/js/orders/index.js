$(document).ready(function () {

    "use strict";

    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

    // ---------------- Data Table Code  ----------------------->>
    $.fn.dataTable.ext.errMode = 'throw';

    let dataTable = $('#orderDataTable').DataTable({
        serverSide: true,
        ajax: quickRecruitSpace.route,
        searching: true,
        processing: true,
        responsive: true,
        columns: [
            {data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false},
            {data: 'company_name', name: 'company.name'},
            {data: 'plan_name', name: 'plan.name'},
            {data: 'price', name: 'price'},
            {data: 'currency_id', name: 'currency_id', searchable: false},
            {data: 'payment_gateway', name: 'payment_gateway'},
            {data: 'payment_status', name: 'payment_status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'receipt', name: 'receipt',orderable: false},
        ],
        "order": [[0, "asc"]]
    });

    $.modalCallBackOnAnyChange = function () {
        dataTable.draw(false);
    }
});
