$(document).ready(function () {
    "use strict";
    const pwstrength = $(".pwstrength");
    const timezoneSelector = $("#timezone");
    let timezone = moment.tz.guess();

    if (pwstrength.length) {
        pwstrength.pwstrength();
    }
    if (timezoneSelector.length) {
        timezoneSelector.val(timezone);
    }
});

