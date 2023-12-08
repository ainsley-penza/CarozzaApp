    document.getElementById("filter_manufacturer").addEventListener("change", function() {
        let manu_id = this.value || this.options[this.selectedIndex].value;
        window.location.href = window.location.href.split('?')[0] + '?manufacturer_id=' + manu_id;
    });

    document.querySelectorAll('.btn-delete').forEach((button) => {
        button.addEventListener('click', function(event){
            event.preventDefault();

            if(confirm("Are you sure that you would like to delete this car?")){
                let action = this.getAttribute('href');
                let form = document.getElementById('form-remove');
                form.setAttribute('action', action);
                form.submit();
            }
        })
    })