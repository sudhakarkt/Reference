$('.jsgrid-grid-body').scroll((function () {
    Fixed_column();
}));

function Fixed_column() {
    var right_width = 0;
    if ($('.jsgrid-grid-body').scrollLeft() == 0) {
        right_width = $('.jsgrid-grid-body .jsgrid-table').width() - $('.jsgrid-grid-body').width();
    }

    else {
        right_width = $('.jsgrid-grid-body .jsgrid-table').width() - $('.jsgrid-grid-body').width() - $('.jsgrid-grid-body').scrollLeft();
    }

    right_width = right_width - 1;

    $('.jsgrid-header-row th.sub-total, .jsgrid-grid-body tr td.sub-total, .jsgrid-grid-body tr td.total-count, .jsgrid-grid-body tr.jsgrid-edit-row td.sub-total, .jsgrid-grid-body tr.jsgrid-edit-row td.total-count')
    .css({
        "position": "relative",
        "right": right_width
    });

    var left_Width = $('.jsgrid-grid-body').scrollLeft() < $('.jsgrid-grid-body .jsgrid-table').width() - $('.jsgrid-grid-body').width() + 16
        ? $('.jsgrid-grid-body').scrollLeft() : $('.jsgrid-grid-body .jsgrid-table').width() - $('.jsgrid-grid-body').width() + 16;

    left_Width = left_Width - 1;

    $('.jsgrid-header-row th:nth-child(-n+2), .jsgrid-grid-body tr td:nth-child(-n+2), .jsgrid-grid-body tr.jsgrid-edit-row td:nth-child(-n+2)')
    .css({
        "position": "relative",
        "left": left_Width
    });
}

