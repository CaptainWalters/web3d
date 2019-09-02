$(document).ready(function() {
    $.getJSON('../db/monopoly.json', function(data) {
        let output='<div class="row">';
        for(let i in data.components) {
            output+='\
                <div class="col-sm-4">\
                    <article class="card text left">\
                        <div class="card-header">\
                            <a href="#" data-fancybox data-caption="'+data.components[i].name+'">\
                                <img src="assets/images/'+data.components[i].name+'.jpg" alt="'+data.components[i].name+'">\
                            </a>\
                        </div>\
                        <div id="card-body">\
                            <h1 id="title">'+data.components[i].name+'</h1>\
                            <p id="description">'+data.components[i].short_description+'</p>\
                        </div>\
                    </article>\
                </div>'
        }
        output+='</div>';
        $('#articleCards').html(output);
    })
})