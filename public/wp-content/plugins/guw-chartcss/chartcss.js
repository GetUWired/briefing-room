jQuery(document).ready(function($) {
    // Chart CSS JavaScript functionality would go here
    var _doing_chart_ajax = false;

    var chartLoadingHtml = `<div class="chart-skeleton">
        <div class="skeleton-bar"></div>
        <div class="skeleton-bar"></div>
        <div class="skeleton-bar"></div>
        <div class="skeleton-bar"></div>
        <div class="skeleton-bar"></div>
    </div>`;

    var statLoadingHtml = `<div class="stat-card-skeleton">
        <div class="skeleton-bar" style="width: 60%; height: 1.5rem; margin-bottom: .5rem;"></div>
        <div class="skeleton-bar" style="width: 40%; height: 1.5rem;"></div>
    </div>`;
    

    function loadCharts() {

        const filters = jQuery("#btn-filter-form").serializeArray()
            .reduce((obj, item) => (obj[item.name] = item.value, obj), {});

        jQuery(".btn-chart-block").each(function() {

            const block = jQuery(this);
            const endpoint = block.data("endpoint");

            block.html(chartLoadingHtml);

            jQuery.ajax({
                url: CONTENT_LOADER.root + `briefingroom/v1/${endpoint}`,
                method: "POST",
                beforeSend: xhr => xhr.setRequestHeader('X-WP-Nonce', CONTENT_LOADER.nonce),
                data: filters,
                success: response => {
                    if (response?.html) {
                        block.html(response.html);
                    } else {
                        block.html("<div class='chart-error'>Error loading chart</div>");
                    }
                },
                error: () => {
                    block.html("<div class='chart-error'>Request failed</div>");
                }
            });

        });
    }

    function loadStats() {

        const filters = jQuery("#btn-filter-form").serializeArray()
            .reduce((obj, item) => (obj[item.name] = item.value, obj), {});

        jQuery(".stat-card").each(function() {

            const card = jQuery(this);
            const endpoint = card.data("endpoint");

            card.html(statLoadingHtml);

            jQuery.ajax({
                url: CONTENT_LOADER.root + `briefingroom/v1/${endpoint}`,
                method: "POST",
                beforeSend: xhr => xhr.setRequestHeader('X-WP-Nonce', CONTENT_LOADER.nonce),
                data: filters,
                success: response => {
                    if (response?.html) {
                        card.html(response.html);
                    } else {
                        card.html("<div class='chart-error'>Error loading stat</div>");
                    }
                },
                error: () => {
                    card.html("<div class='chart-error'>Request failed</div>");
                }
            });

        });
    }


    // Load charts on page load
    loadCharts();

    loadStats();

    // Reload charts when filters are submitted
    jQuery("#btn-filter-form").on("submit", function(e){
        e.preventDefault();
        loadCharts();
        loadStats();
    });

    let chartContainer = jQuery("#btn-charts");

    jQuery(document).on("click", ".stat-card > [data-loadchart]", function(e){
        e.preventDefault();
        chartContainer.html(chartLoadingHtml);
        
        const endpoint = jQuery(this).data("loadchart");
        // Load the detailed chart for this stat card
        jQuery.ajax({
            url: CONTENT_LOADER.root + `briefingroom/v1/${endpoint}`,
            method: "POST",
            beforeSend: xhr => xhr.setRequestHeader('X-WP-Nonce', CONTENT_LOADER.nonce),
            success: response => {
                if (response?.html) {
                    jQuery(chartContainer).html(response.html);
                } else {
                    jQuery(chartContainer).html("<div class='chart-error'>Error loading chart</div>");
                }
            },
            error: () => {
                jQuery(this).html("<div class='chart-error'>Request failed</div>");
            }
        });
    });


});
