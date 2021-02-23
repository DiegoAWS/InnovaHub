<div hidden id="appointmentModal" class="backdrop-modal">
    <div class="content-modal">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 py-4">
                    @include("material.textField",
                    [
                    "id"=>"enterpriseModal",
                    "label"=>__('Destinatario'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>
                <div class="col-xs-12 col-sm-4 py-4">
                    @include("material.textField",
                    [
                    "id"=>"date",
                    "label"=>__('Fecha'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>
                <div class="col-xs-12 col-sm-8 py-4">
                    @include("material.textField",
                    [
                    "id"=>"subject",
                    "label"=>__('Asunto'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>

                <div class="col-xs-12 col-sm-4 py-4">
                    @include("material.textField",
                    [
                    "id"=>"dateHour",
                    "label"=>__('Hora'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>
                <div class="col-xs-12 col-sm-6 py-4">
                    @include("material.textField",
                    [
                    "id"=>"type",
                    "label"=>__('Tipo'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>
                <div class="col-xs-12 col-sm-6 py-4">
                    @include("material.textField",
                    [
                    "id"=>"place",
                    "label"=>__('Dónde'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>

                <div class="col-xs-12 py-4">
                    @include("material.textField",
                    [
                    "id"=>"participant",
                    "label"=>__('Participantes'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>
                <div class="col-xs-12 py-4">
                    @include("material.textAreaField",
                    [
                    "id"=>"notes",
                    "label"=>__('Notas'),
                    "class"=>"",
                    "inputClass"=>""
                    ]
                    )
                </div>
            </div>
            <div class="w-full flex">
                <label>
                    <input type="checkbox"> Notificar por WhatsApp
                </label>
            </div>
            <div class="w-full flex">
                <button id="modalSubmitAppointment" class="btn btn-primary mx-auto">
                    SUBMIT NOW</button>

            </div>
        </div>

    </div>
</div>
