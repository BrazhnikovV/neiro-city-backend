
/*!
 *   Main Web Application Main - js
 *   Author: brazhnikov vasya
 *	 Website: Almsaeed Studio <http://.io>
 *   License: Open source - MIT
 *   Please visit http://opensource.org/licenses/MIT for more information
 */
$('document').ready( function(){
    $( document ).on( 'click', '#banners img', function(){
        var image_id = $(this).attr('id');
        $().Requester( 'makeRequest', function( response ){
            console.log(response);
        }, image_id );
    });
});