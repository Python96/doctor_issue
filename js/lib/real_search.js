/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function ()
{
    $('#search').keyup(function ()
    {
        searchTable($(this).val());
    });
});

function searchTable(inputVal)
{
    var table = $('#tblData');
    table.find('tr').each(function (index, row)
    {
        var allCells = $(row).find('td');
        if (allCells.length > 0)
        {
            var found = false;
            allCells.each(function (index, td)
            {
                var regExp = new RegExp(inputVal, 'i');
                if (regExp.test($(td).text()))
                {
                    found = true;
                    return false;
                }
            });
            if (found == true)
                $(row).show();
            else
                $(row).hide();
        }
    });
}