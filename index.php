<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2 {
            width: 300px;
        }
    </style>
</head>
<body>

<select id="regionSelect" class="select2" name="region" onChange="regionChange()">

</select>

<select id="branchSelect" class="select2" name="branch">

</select>

    
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#regionSelect').select2({
            placeholder: "Select Region",
            minimumResultsForSearch: Infinity,
            allowClear: true,
            ajax: {
                url: 'region.php',
                data: function (params) {
                var query = {
                    search: params.term,
                    type: 'public'
                }

                // Query parameters will be ?search=[term]&type=public
                return query;
                }
            }
        
        });



        $('#branchSelect').select2();

    });


    function regionChange()
    {
        //$('#subeSelect').val(null).trigger('change');
        $('#branchSelect').empty();
        var regionCode = $('#regionSelect').val();
        console.log(regionCode);
        $.ajax({
            url: 'branch.php?regioncode='+regionCode,
            type: 'GET',
            success: function(data) {
                $.each(data.results, function(i, item) {
                    console.log(item.id);
                    $('#branchSelect').append(new Option(data.results[i].text, data.results[i].id , false, false)).trigger('change');
                });
            }
        });
    }





</script>
</body>
</html>