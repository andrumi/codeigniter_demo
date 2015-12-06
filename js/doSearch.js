/**
 * Created by andrew on 20/11/2015.
 */
function doSearch()
{
    $.ajax({
        type: "GET",
        url:"http://mi-linux.wlv.ac.uk/~1228264/codeigniter/index.php/ajax/getdata/" + $("#mysearch").val(),
        success:function(result){
            $("#searchresults").html(result);
        }});
}

function doDateSearch()
{
    $.ajax({
        type: "GET",
        url:"http://mi-linux.wlv.ac.uk/~1228264/codeigniter/index.php/ajax/getDatedata/" + $("#mydatesearch").val(),
        success:function(result){
            $("#searchresults").html(result);
        }});
}
