jQuery( document ).ready( function () {

    //report filter submission handler
    var _doing_report_ajax = false;
    jQuery( '#page' ).on( 'submit', '#session_report_form', function(e) {
        e.preventDefault();

        renderSkeletonTable('#session_report_container', 8, 6);


        if(_doing_report_ajax){
            return false;
        }

        var formData = new FormData(this);

        let endpoint = formData.get('action'); 

        _doing_report_ajax = true;
        jQuery.ajax({
            method: "POST",
            url: CONTENT_LOADER.root + `briefingroom/v1/${endpoint}`,
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', CONTENT_LOADER.nonce );
            },
            success : function( response ) {
                if(response.status == "success"){
                    renderSessionReportTable(response, '#session_report_container');
                } else if(response.status == "failed"){
                    console.log(response);
                }
                _doing_report_ajax = false;
            },
            fail : function( response ) {
                console.log(response);
                _doing_report_ajax = false;
            }
 
        });
 
    });

        //report filter submission handler
    var _doing_report_ajax = false;
    jQuery( '#page' ).on( 'submit', '#officerForm', function(e) {
        e.preventDefault();

        renderSkeletonTable('#students_report_container', 5, 6);


        if(_doing_report_ajax){
            return false;
        }

        var formData = new FormData(this);

        let endpoint = formData.get('action'); 

        _doing_report_ajax = true;
        jQuery.ajax({
            method: "POST",
            url: CONTENT_LOADER.root + `briefingroom/v1/${endpoint}`,
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', CONTENT_LOADER.nonce );
            },
            success : function( response ) {
                if(response.status == "success"){
                    renderStudentsReportTable(response, '#students_report_container');
                } else if(response.status == "failed"){
                    console.log(response);
                }
                _doing_report_ajax = false;
            },
            fail : function( response ) {
                console.log(response);
                _doing_report_ajax = false;
            }
 
        });
 
    });

    // Facilitator report submission handler
    jQuery('#page').on('submit', '#facilitatorForm', function(e) {
        e.preventDefault();

        renderSkeletonTable('#facilitators_report_container', 6, 8);

        if(_doing_report_ajax){
            return false;
        }

        var formData = new FormData(this);
        let endpoint = formData.get('action'); // should equal "get_facilitators_report"

        _doing_report_ajax = true;

        jQuery.ajax({
            method: "POST",
            url: CONTENT_LOADER.root + `briefingroom/v1/${endpoint}`,
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: xhr => xhr.setRequestHeader('X-WP-Nonce', CONTENT_LOADER.nonce),
            success: response => {
                if(response.status === "success"){
                    renderFacilitatorsReportTable(response, '#facilitators_report_container');
                } else {
                    console.log(response);
                }
                _doing_report_ajax = false;
            },
            fail: response => {
                console.log(response);
                _doing_report_ajax = false;
            }
        });
    });



    jQuery( '#page' ).on( 'click', '.next-page.button, .prev-page.button', function(e) {
        e.preventDefault();

        
        let formName = jQuery(this).data('form');
        let pageNumber = jQuery(this).data('page');
        let action = jQuery(this).data('action');

        if(action == 'get_students_report'){
            renderSkeletonTable('#students_report_container', 5, 6);
        } else if(action === 'get_sessions_report'){
            renderSkeletonTable('#session_report_container', 8, 6);
        } else if(action === 'get_facilitators_report'){
            renderSkeletonTable('#facilitators_report_container', 6, 8);
        }

        if(_doing_report_ajax){
            return false;
        }

        var formData = new FormData(jQuery(`[name="${formName}"]`)[0]);
        formData.set('report_page', pageNumber);

        _doing_report_ajax = true;
        jQuery.ajax({
            method: "POST",
            url: CONTENT_LOADER.root + `briefingroom/v1/${action}`,
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', CONTENT_LOADER.nonce );
            },
            success : function( response ) {
                if(response.status == "success"){
                    if(action == 'get_students_report'){
                        renderStudentsReportTable(response, '#students_report_container');
                    } else if(action === 'get_sessions_report'){
                        renderSessionReportTable(response, '#session_report_container');
                    } else if(action === 'get_facilitators_report'){
                        renderFacilitatorsReportTable(response, '#facilitators_report_container');
                    }
                } else if(response.status == "failed"){
                    console.log(response);
                }
                _doing_report_ajax = false;
            },
            fail : function( response ) {

                console.log(response);
                _doing_report_ajax = false;
            }
 
        });
 
    });

    
    jQuery( '#page' ).on( 'click', '.tableSort', function(e) {
        e.preventDefault();

        let formName = jQuery(this).data('form');
        let sortby = jQuery(this).data('sortby');
        let sort = jQuery(this).data('sort');
        let action = jQuery(this).data('action');

        if(action == 'get_students_report'){
            renderSkeletonTable('#students_report_container', 5, 6);
        } else if(action === 'get_sessions_report'){
            renderSkeletonTable('#session_report_container', 8, 6);
        } else if(action === 'get_facilitators_report'){
            renderSkeletonTable('#facilitators_report_container', 6, 8);
        }

        let sortStmnt = sortby+','+sort;

        if(_doing_report_ajax){
            return false;
        }

        jQuery(`[name="${formName}"]`).find('input[name="sort"]').val(sortStmnt);

        // console.log(sortStmnt);
        // console.log(sortInput);

        var formData = new FormData(jQuery(`[name="${formName}"]`)[0]);

        
        formData.set('sort', sortStmnt);

        _doing_report_ajax = true;
        jQuery.ajax({
            method: "POST",
            url: CONTENT_LOADER.root + `briefingroom/v1/${action}`,
            dataType: "JSON",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', CONTENT_LOADER.nonce );
            },
            success : function( response ) {
                if(response.status == "success"){
                    if(action == 'get_students_report'){
                        renderStudentsReportTable(response, '#students_report_container');
                    } else if(action === 'get_sessions_report'){
                        renderSessionReportTable(response, '#session_report_container');
                    } else if(action === 'get_facilitators_report'){
                        renderFacilitatorsReportTable(response, '#facilitators_report_container');
                    }
                } else if(response.status == "failed"){
                    console.log(response);
                }
                _doing_report_ajax = false;
            },
            fail : function( response ) {

                console.log(response);
                _doing_report_ajax = false;
            }
 
        });
 
    });

    function loadSessionReportTable(){

        renderSkeletonTable('#session_report_container', 8, 6);


        _doing_report_ajax = true;
        jQuery.ajax({
            method: "POST",
            url: CONTENT_LOADER.root + `briefingroom/v1/get_sessions_report`,
            dataType: "JSON",
            processData: false,
            contentType: false,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', CONTENT_LOADER.nonce );
            },
            success : function( response ) {
                if(response.status == "success"){
                    renderSessionReportTable(response, '#session_report_container');
                } else if(response.status == "failed"){
                    console.log(response);
                }
                _doing_report_ajax = false;
            },
            fail : function( response ) {
                console.log(response);
                _doing_report_ajax = false;
            }

        });
    }
    
    function loadStudentReportTable(){
        renderSkeletonTable('#students_report_container', 5, 6);

        _doing_report_ajax = true;
        jQuery.ajax({
            method: "POST",
            url: CONTENT_LOADER.root + `briefingroom/v1/get_students_report`,
            dataType: "JSON",
            processData: false,
            contentType: false,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', CONTENT_LOADER.nonce );
            },
            success : function( response ) {
                if(response.status == "success"){
                    renderStudentsReportTable(response, '#students_report_container');
                } else if(response.status == "failed"){
                    console.log(response);
                }
                _doing_report_ajax = false;
            },
            fail : function( response ) {
                console.log(response);
                _doing_report_ajax = false;
            }

        });
    }

    function loadFacilitatorReportTable(){
        renderSkeletonTable('#facilitators_report_container', 6, 8);

        _doing_report_ajax = true;
        jQuery.ajax({
            method: "POST",
            url: CONTENT_LOADER.root + `briefingroom/v1/get_facilitators_report`,
            dataType: "JSON",
            processData: false,
            contentType: false,
            beforeSend: xhr => xhr.setRequestHeader('X-WP-Nonce', CONTENT_LOADER.nonce),
            success: response => {
                if(response.status === "success"){
                    renderFacilitatorsReportTable(response, '#facilitators_report_container');
                } else {
                    console.log(response);
                }
                _doing_report_ajax = false;
            },
            fail: response => {
                console.log(response);
                _doing_report_ajax = false;
            }
        });
    }


    function renderSessionReportTable(response, containerSelector) {
        if (!response || !response.data) {
            console.error("Invalid response received from server");
            return;
        }

        // Capture filter state at render time — inputs match what the table will display.
        window.sessionExportFilters = {
            search:    (document.getElementById('search')    || {}).value || '',
            startDate: (document.getElementById('startDate') || {}).value || '',
            endDate:   (document.getElementById('endDate')   || {}).value || '',
        };

        const { currentPage = 1, numPages = 1, total = 0, perPage = 25, sort = 'DESC' } = response.data;
        const sessions = response.sessions || [];
        const container = document.querySelector(containerSelector);

        
        const newState = (sort === 'DESC') ? 'ASC' : 'DESC'; 


        if (!container) {
            console.error(containerSelector + " not found in DOM");
            return;
        }

        // Calculate start/end for pagination display
        const start = (currentPage - 1) * perPage + 1;
        const end = Math.min(start + sessions.length - 1, total);

        // Build pagination block
        const paginationHTML = `
            <div class="tablenav top">
                <span class="pagination-info">
                    Showing <span class="js-rowCount">${start}-${end}</span> of <span class="js-totalCount">${total}</span> session(s)
                </span>
                <div class="tablenav-pages">
                    Page <span class="js-page">${currentPage}</span> of <span class="js-pageCount">${numPages}</span>
                    ${
                        currentPage > 1
                            ? `<a class="prev-page button" href="#" data-page="${currentPage - 1}" data-action="get_sessions_report" data-form="session_report_form">&lt; Prev</a>`
                            : ""
                    }
                    ${
                        currentPage < numPages
                            ? `<a class="next-page button" href="#" data-page="${currentPage + 1}" data-action="get_sessions_report" data-form="session_report_form">Next &gt;</a>`
                            : ""
                    }
                </div>
            </div>
        `;

        // Table headers
        const tableHeaders = [
            { id: "select_all_item_session", label: "" },
            { id: "id", label: "ID" },
            { id: "completedAt", label: "Date" },
            { id: "post_title", label: "Session Name" },
            { id: "facilitator", label: "Facilitator Name" },
            { id: "duration", label: "Duration" },
            { id: "officers", label: "Students" },
            { id: "action", label: "Downloads" }
        ];

        // Build table rows
        const tableRows =
            sessions.length > 0
                ? sessions
                    .map(
                        s => `
                    <tr>
                        <td><input type="checkbox" class="select_item_session" name="select_all_item_session[]" value="${s.id ?? ""}" /></td>
                        <td>${s.id ?? ""}</td>
                        <td>${s.completedAt ?? ""}</td>
                        <td>${s.post_title ?? ""}</td>
                        <td>${s.facilitator ?? ""}</td>
                        <td>${s.duration ?? ""}</td>
                        <td>${s.officers ?? ""}</td>
                        <td>${s.action ?? ""}</td>
                    </tr>`
                    )
                    .join("")
                : `<tr><td colspan="${tableHeaders.length}" style="text-align:center;">No sessions found.</td></tr>`;

        const tableHTML = `
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        ${tableHeaders
                            .map(h => {
                                if (h.id === "select_all_item_session") {
                                    // Render the select-all checkbox in the header
                                    return `<th><input type="checkbox" class="select_all_item_session" id="select_all_item_sessions" /></th>`;
                                } else if(h.id === "action" || h.id === "officers"){
                                    return `<th>${h.label}</th>`;
                                }
                                return `<th>${h.label}<span class="tableSort" data-action="get_sessions_report" data-form="session_report_form" data-sortby="${h.id}" data-sort="${newState}"></span></th>`;
                            })
                            .join("")}
                    </tr>
                </thead>
                <tbody>${tableRows}</tbody>
            </table>
        `;

        // Replace container content
        container.innerHTML = paginationHTML + tableHTML + paginationHTML;

        // Bind "select all" checkbox if present
        const selectAll = container.querySelector('th input.select_all_item_session');
        if (selectAll) {
            selectAll.addEventListener("change", () => {
                const checked = selectAll.checked;
                container.querySelectorAll(".select_item_session").forEach(cb => {
                    cb.checked = checked;
                    cb.dispatchEvent(new Event('change', { bubbles: true }));
                });
            });

            // Restore "export all" state after re-render (page navigation)
            if (window.sessionExportAllFiltered) {
                selectAll.checked = true;
                container.querySelectorAll('input[name="select_all_item_session[]"]').forEach(cb => {
                    cb.checked = true;
                });
                if (typeof window.updateSessionDownloadHrefs === 'function') {
                    window.updateSessionDownloadHrefs();
                }
                jQuery('.all-session-csv, .all-session-pdf').show();
            }
        }
    }

    function renderStudentsReportTable(response, containerSelector) {
        if (!response || !response.data) {
            console.error("Invalid response received from server");
            return;
        }

        const { currentPage = 1, numPages = 1, total = 0, perPage = 25, sort = 'DESC', students = [] } = response.data;
        // const students = response.data.students || [];

        // console.log('student sort' + sort);

        const container = document.querySelector(containerSelector);

        
        const newState = (sort === 'DESC') ? 'ASC' : 'DESC'; 


        if (!container) {
            console.error(containerSelector + " not found in DOM");
            return;
        }

        // Calculate start/end for pagination display
        const start = (currentPage - 1) * perPage + 1;
        const end = Math.min(start + students.length - 1, total);

        // Build pagination block
        const paginationHTML = `
            <div class="tablenav top">
                <span class="pagination-info">
                    Showing <span class="js-rowCount">${start}-${end}</span> of <span class="js-totalCount">${total}</span> session(s)
                </span>
                <div class="tablenav-pages">
                    Page <span class="js-page">${currentPage}</span> of <span class="js-pageCount">${numPages}</span>
                    ${
                        currentPage > 1
                            ? `<a class="prev-page button" href="#" data-page="${currentPage - 1}" data-action="get_students_report" data-form="student_report_form">&lt; Prev</a>`
                            : ""
                    }
                    ${
                        currentPage < numPages
                            ? `<a class="next-page button" href="#" data-page="${currentPage + 1}" data-action="get_students_report" data-form="student_report_form">Next &gt;</a>`
                            : ""
                    }
                </div>
            </div>
        `;

        //Table Headers

        const tableHeaders = [
            {id: "id",label: "ID"},
            {id: "officerName",label: "Student Name"},
            {id: "totalDuration",label: "Training Time"},
            {id: "trainingSessionCount",label: "Sessions Completed"},
            { id: "action", label: "Downloads" }
        ];

        const tableRows = 
            students.length > 0
                ? students
                    .map(
                        s => `
                    <tr>
                        <td>${s.id ?? ""}</td>
                        <td>${s.officerName ?? ""}</td>
                        <td>${s.totalDuration ?? ""}</td>
                        <td>${s.trainingSessionCount ?? ""}</td>
                        <td>${s.action ?? ""}</td>
                    </tr>`
                    )
                    .join("")
                : `<tr><td colspan="${tableHeaders.length}" style="text-align:center;">No students found.</td></tr>`;

        const tableHTML = `<table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        ${tableHeaders
                            .map(h => {
                                if(h.id === "action"){
                                    return `<th>${h.label}</th>`;
                                }
                                return `<th>${h.label}<span class="tableSort" data-action="get_students_report" data-form="student_report_form" data-sortby="${h.id}" data-sort="${newState}"></span></th>`;
                            })
                            .join("")}
                    </tr>
                </thead>
                <tbody>${tableRows}</tbody>
            </table>`;

        // Replace container content
        container.innerHTML = paginationHTML + tableHTML + paginationHTML;    
    }

    function renderFacilitatorsReportTable(response, containerSelector) {
        if (!response || !response.data) {
            console.error("Invalid facilitator response");
            return;
        }

        const { currentPage = 1, numPages = 1, total = 0, perPage = 25 } = response.data;
        const facilitators = response.facilitators || [];
        
        const sortDirection = response.data.sortDirection || 'DESC';
        const newState = (sortDirection === 'DESC') ? 'ASC' : 'DESC';

        const container = document.querySelector(containerSelector);
        if (!container) return;

        // const newState = (sort === 'DESC') ? 'ASC' : 'DESC'; 


        const start = (currentPage - 1) * perPage + 1;
        const end = Math.min(start + facilitators.length - 1, total);

        const paginationHTML = `
            <div class="tablenav top">
                <span class="pagination-info">
                    Showing <span class="js-rowCount">${start}-${end}</span> of
                    <span class="js-totalCount">${total}</span> facilitator(s)
                </span>
                <div class="tablenav-pages">
                    Page <span class="js-page">${currentPage}</span> of <span class="js-pageCount">${numPages}</span>
                    ${currentPage > 1
                        ? `<a class="prev-page button" data-page="${currentPage - 1}" data-action="get_facilitators_report" data-form="facilitatorForm">&lt; Prev</a>`
                        : ""}
                    ${currentPage < numPages
                        ? `<a class="next-page button" data-page="${currentPage + 1}" data-action="get_facilitators_report" data-form="facilitatorForm">Next &gt;</a>`
                        : ""}
                </div>
            </div>
        `;

        const tableHeaders = [
            { id: "id", label: "ID" },
            { id: "name", label: "Facilitator Name" },
            { id: "sessionCount", label: "Sessions" },
            { id: "trainingTime", label: "Training Time" },
            { id: "lastLogin", label: "Last Login" },
            { id: "action", label: "Downloads" }
        ];

        const rowsHTML =
            facilitators.length > 0
                ? facilitators
                    .map(
                        f => `
                    <tr>
                        <td>${f.id ?? ""}</td>
                        <td>${f.name ?? ""}</td>
                        <td>${f.sessionCount ?? 0}</td>
                        <td>${f.trainingTime ?? ""}</td>
                        <td>${f.lastLogin ?? ""}</td>
                        <td>${f.action ?? ""}</td>
                    </tr>`
                    )
                    .join("")
                : `<tr><td colspan="${tableHeaders.length}" style="text-align:center;">No facilitators found.</td></tr>`;

        const tableHTML = `
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        ${tableHeaders
                            .map(h =>
                                h.id === "action"
                                    ? `<th>${h.label}</th>`
                                    : `<th>${h.label}<span class="tableSort" data-action="get_facilitators_report" data-form="facilitatorForm" data-sortby="${h.id}" data-sort="${newState}"></span></th>`
                            )
                            .join("")}
                    </tr>
                </thead>
                <tbody>${rowsHTML}</tbody>
            </table>
        `;

        container.innerHTML = paginationHTML + tableHTML + paginationHTML;
    }

    function renderSkeletonTable(containerSelector, numCols = 5, numRows = 5) {
        const container = document.querySelector(containerSelector);
        if (!container) return;

        // Build skeleton rows
        const skeletonRows = Array(numRows).fill(0).map((_, rowIdx) => `
            <tr class="${rowIdx % 2 === 0 ? 'alternate' : ''}">
                ${Array(numCols).fill(0).map(() => `<td><div class="skeleton-cell"></div></td>`).join('')}
            </tr>
        `).join('');

        const tableHTML = `
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>${Array(numCols).fill(0).map(() => `<th>&nbsp;</th>`).join('')}</tr>
                </thead>
                <tbody>${skeletonRows}</tbody>
            </table>
        `;

        container.innerHTML = tableHTML;
    }



    if (document.querySelector('#session_report_container')) {
        loadSessionReportTable();
    }

    if (document.querySelector('#students_report_container')) {
        loadStudentReportTable();
    }

    if (document.querySelector('#facilitators_report_container')) {
        loadFacilitatorReportTable();
    }

} );