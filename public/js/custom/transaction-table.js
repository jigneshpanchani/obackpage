var transaction = function() {
    
    var TransactionList = function() {



        function getDataTable(arr) {
            var dataTable = $(arr.tableID).DataTable({
                //"scrollY": "200px",
                "sDom": 'Rfrtlip',
                "processing": true,
                "serverSide": true,
                "bAutoWidth": false,
                // "bLengthChange": false,
                "bInfo": false,
                "language": {
                    "search": "_INPUT_",
                    "searchPlaceholder": "Search..."
                },
                "order": [
                    [(arr.defaultSortColumn) ? arr.defaultSortColumn : '0', (arr.defaultSortOrder) ? arr.defaultSortOrder : 'desc']
                ],
                "columnDefs": [{
                        "targets": arr.hideColumnList,
                        "visible": false
                    },
                    {
                        "targets": arr.noSortingApply,
                        "orderable": false
                    },
                    {
                        "targets": arr.noSearchApply,
                        "searchable": false
                    },
                    
                    (arr.setColumnWidth) ? arr.setColumnWidth : '',
                    
                    
                ],
                "ajax": {
                    url: arr.ajaxURL,
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: { 'action': arr.ajaxAction, 'data': arr.transactionData },
                    error: function() { // error handling
                        $(".row-list-error").html("");
                        $(arr.tableID).append('<tbody class="row-list-error"><tr><td colspan="4" style="text-align: center;"><p style="color:red;">No Record Found</p></td></tr></tbody>');
                        $(arr.tableID + "processing").css("display", "none");
                    }
                }
            });
        
            onLoadDefaultColumnSet(dataTable);
            hideShowDatatableColumn(dataTable);
        }

        function onLoadDefaultColumnSet(dataTable) {
            $('.custom-column').each(function() {
                var column = dataTable.column($(this).attr('data-column'));
                var status = $(this).attr('data-default-status');
        
                if ($(this).is(":checked")) {
                    column.visible(!column.visible());
                } else {
                    column.visible(column.visible());
                }
                if (status == 'true') {
                    column.visible(!column.visible());
                }
            });
        }

        function hideShowDatatableColumn(dataTable) {
            $('body').on('click', '.custom-column', function() {
                // Get the column API object
                var column = dataTable.column($(this).attr('data-column'));
                // Toggle the visibility
                column.visible(!column.visible());
            });
        }

        var dataArr = {};
        var columnWidth = {"width": "15%", "targets": 0};
        var arrList = {
            'tableID': '#transactionData',
            'ajaxURL': base_url + "transaction-ads-ajax",
            'ajaxAction': 'getTransactionData',
            'transactionData': dataArr,
            'hideColumnList': [],
            'noSearchApply': [],
            //'noSortingApply': [2],
            'defaultSortColumn': 0,
            'defaultSortOrder': 'desc',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);
        
    };
    return{
        transaction: function() {
            TransactionList();
        },
       
    };
    

    

}();