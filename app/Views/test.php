<?php echo $_SERVER['SERVER_ADDR']; ?>
<select id="province" class="form-control">
    <option value="">กรุณาเลือกจังหวัด</option>
    <?php 
    foreach($province as $key => $item)
    {
        echo '<option value="'.$item->id.'">'.str_replace('*','',$item->name_th).'</option>';
    }
    ?>
</select>
<select id="district" class="form-control" style="display:none;"></select>
<select id="sub_district" class="form-control" style="display:none;"></select>

<script>
    $(document).ready(function() {

        $('#district').change(function()
        {
            var district_id = $(this).val();
            $("#province").val($(this).find('option:selected').attr('province'));
            if(district_id)
            {
                let dropdown = $('#sub_district');

                    dropdown.empty();

                    dropdown.append('<option value="">กรุณาเลือกตำบล</option>');
                    dropdown.prop('selectedIndex', 0);

                    const url = '<?= base_url() ?>/subdistrict?district_id='+district_id;

                    // Populate dropdown with list of provinces
                    $.getJSON(url, function (data) {
                        if(!jQuery.isEmptyObject(data))
                        {
                            dropdown.show();
                            $.each(data, function (key, entry) {
                                dropdown.append($('<option></option>').attr({value:entry.id,amphur:entry.amphure_id}).text(entry.name_th));
                            })
                        }else{
                            dropdown.hide();
                        }
                    });
            }
        })

        $('#province').change(function()
        {
            var province_id = $(this).val();
            $('#sub_district').hide();
            $('#sub_district').empty();
            $('#district').hide();
            $('#district').empty();
            if(province_id)
            {
                let dropdown = $('#district');

                    dropdown.empty();

                    dropdown.append('<option value="">กรุณาเลือกอำเภอ</option>');
                    dropdown.prop('selectedIndex', 0);

                    const url = '<?= base_url() ?>/district?province_id='+province_id;

                    // Populate dropdown with list of provinces
                    $.getJSON(url, function (data) {
                        if(!jQuery.isEmptyObject(data))
                        {
                            dropdown.show();
                            $.each(data, function (key, entry) {
                                dropdown.append($('<option></option>').attr({value:entry.id,province:entry.province_id}).text(entry.name_th));
                            })
                        }else{
                            dropdown.hide();
                        }
                    });
            }
        })

    });
</script>