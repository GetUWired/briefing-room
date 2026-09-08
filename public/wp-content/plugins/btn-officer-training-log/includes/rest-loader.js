jQuery( document ).ready( function () {

    console.log('rest-loader.js loaded');

    //report filter submission handler
    var _doing_report_ajax = false;
    jQuery( '#page' ).on( 'submit', '.report_form', function(e) {
        e.preventDefault();

        if(_doing_report_ajax){
            return false;
        }

        var theFormData = new FormData(this);

        let endpoint = formData.get('action'); 

        _doing_report_ajax = true;
        jQuery.ajax({
            method: "POST",
            url: CASE_INFO.root + `briefingroom/v1/${endpoint}`,
            dataType: "JSON",
            data: theFormData,
            processData: false,
            contentType: false,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', CASE_INFO.nonce );
            },
            success : function( response ) {
                if(response.status == "success"){
                    console.log(response);
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

} );