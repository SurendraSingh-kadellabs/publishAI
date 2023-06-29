<script>
    "use strict"
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ---------------- Data Table Code  ----------------------->>
    // $.fn.dataTable.ext.errMode = 'throw';
    let contactsDataTable = $('#contactsDataTable').DataTable({

        'pageLength': 5,
        'lengthMenu': [5, 10, 25, 50],
        dom: '<"pull-left"f><"pull-right"l>rtip',
        serverSide: true,
        ajax: "{{ route('manage_user.index') }}",
        searching: true,
        scrollY: '280px',
        processing: true,
        responsive: true,
        language: {
            searchPlaceholder: "Name, Department, Email"
        },

        columns: [{
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                orderable: false,
                searchable: false
            },
            {
                data: 'full_name',
                name: 'full_name',
                orderable: true,
                searchable: true
            },
            {
                data: 'client_name',
                name: 'client.name',
                orderable: true,
                searchable: true
            },
            {
                data: 'email',
                name: 'email',
                orderable: true,
                searchable: true
            },
            {
                data: 'number',
                name: 'number',
                orderable: false,
                searchable: false
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
        "order": [
            [1, "asc"]
        ]
    });


    $.modalCallBackOnAnyChange = function() {
        contactsDataTable.draw(false);
    }

    $(document).ready(function() {
        $('.dataTables_filter input[type="search"]').css({
            'width': '250px',
            'display': 'inline-block'
        });
    });
    // ---------------- Data Table Code  -----------------------||
</script>