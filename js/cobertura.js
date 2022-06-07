function call_action(id_contenedor) {
       
        let calidadDato = jQuery('.dato-calidad-' + id_contenedor).val();
        let narrativaDato = jQuery('.dato-narrativa-' + id_contenedor).val();
        let rivalidadDato = jQuery('.dato-rivalidad-' + id_contenedor).val();

        let calidad = new ProgressBar.Circle('.calidad-' + id_contenedor, {
            color: '#ffffff',
            duration: 3000,
            strokeWidth: 7,
            trailWidth: 4,
            trailColor: "#b34f0e",
            text: {
                value: calidadDato*10,
            },
        });

         let narrativa = new ProgressBar.Circle('.narrativa-' + id_contenedor, {
            color: '#ffffff',
            duration: 3000,
            strokeWidth: 7,
            trailWidth: 4,
            trailColor: "#2c8caf",
            text: {
                value: narrativaDato*10,
            },
        });

        let rivalidad = new ProgressBar.Circle('.rivalidad-' + id_contenedor, {
            color: '#ffffff',
            duration: 3000,
            strokeWidth: 7,
            trailWidth: 4,
            trailColor: "#2356b6",
            text: {
                value: rivalidadDato*10,
            },
        });


        calidad.animate(calidadDato/10);
        narrativa.animate(narrativaDato/10);
        rivalidad.animate(rivalidadDato/10);

}