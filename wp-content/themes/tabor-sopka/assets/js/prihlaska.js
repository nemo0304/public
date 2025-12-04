 document.addEventListener('DOMContentLoaded', function() {
        //vysouvání inputů pro fakturaci
        const fakturaceCheck = document.getElementById('fakturace-check');
        const fakturaceDetail = document.getElementById('fakturace-detail');
        const fakturaceIco = document.getElementById('fakturace-ico');
        const fakturaceDoplneni = document.getElementById('fakturace-doplneni');

        function toggleFakturace(){
            const enabled = fakturaceCheck.checked;

            if(enabled){
                fakturaceDetail.classList.remove('d-none');
            }else{
                fakturaceDetail.classList.add('d-none');
                fakturaceIco.value = '';
                fakturaceDoplneni.value = '';
            }

            fakturaceIco.required = enabled;
            fakturaceDoplneni.required = enabled;
        }

        if(fakturaceCheck){
            fakturaceCheck.addEventListener('change', toggleFakturace);
            toggleFakturace();
        }




//potvrzovací modal okno
        const form = document.querySelector('.prihlaska-form');
        const submitButton = document.getElementById('odeslat-prihlasku');
        const modalElement = document.getElementById('prihlaskaModal');
        let potvrzovaciModal = null;

        if(modalElement && typeof bootstrap !== 'undefined' && bootstrap.Modal){
            potvrzovaciModal = new bootstrap.Modal(modalElement);
        }

        if(submitButton && form){
            submitButton.addEventListener('click', function(e){
                e.preventDefault();
                
                if(!form.checkValidity()){
                    form.reportValidity();
                    return;
                }
                //odeslat pokud není modal
                if(potvrzovaciModal){
                    potvrzovaciModal.show();
                }else{
                    form.submit();
                }
            });
            const confirmButton = document.getElementById('modal-ano');
            if(confirmButton && form){
                confirmButton.addEventListener('click', function(){
                    if(potvrzovaciModal){
                        potvrzovaciModal.hide();
                    }
                    form.submit();
                });
            }
        }
    });




