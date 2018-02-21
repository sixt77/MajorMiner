function display_by_type(type_list, type){
    for (i=0; i<type_list.length; i++){
        var class_array = document.getElementsByClassName(type_list[i]);
        for (j=0; j<class_array.length; j++){
            class_array[j].style.display='none';
        }

    }
    var type_array = document.getElementsByClassName(type);
    for (i=0; i<type_array.length; i++){
        type_array[i].style.display='block';
    }

}
