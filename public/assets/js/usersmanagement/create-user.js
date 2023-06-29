$(document).ready(function () {

    "use strict";

    let number_div = $("#number_div");
    let role = $("#role");
    let number = $("#number");
    let companyRoleIdSelector = $("#companyRoleId");
    let companyTableFieldSelector = $("#company_table_fields_div");
    let candidateRoleId = number.data('candidate-role-id');
    let companyRoleId = companyRoleIdSelector.data('company-role-id');

    number_div.hide();
    companyTableFieldSelector.hide();
    role.on('change', function () {
        let selectedRoleId = role.val();
        if (selectedRoleId == candidateRoleId) {
            number_div.fadeIn('slow').show();
        } else if (selectedRoleId != candidateRoleId && number_div.is(':visible')) {
            number_div.fadeOut('slow').hide('slow');
        }

        if (selectedRoleId == companyRoleId) {
            companyTableFieldSelector.fadeIn('slow').show();
        } else if (selectedRoleId != companyRoleId && companyTableFieldSelector.is(':visible')) {
            companyTableFieldSelector.fadeOut('slow').hide('slow');
        }
    });
});
