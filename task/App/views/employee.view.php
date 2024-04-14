<?php echo $header ?>

    <?php echo $navbar ?>

    <div class="container my-5 p-md-5 p-3 border border-secondary rounded-4">
        <div class="text-center">
            <h2>Dodaj nowego pracownika</h2>
        </div>
        <form id="employeeForm" method="POST">

            <label for="employee_name" class="form-label">Imię</label>
            <div class="input-group mb-2">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" name="employee_name" id="employee_name" class="form-control" placeholder="Imię" required />
            </div>
            <div id="name_error" class="form-error"></div>

            <label for="last_name" class="form-label">Nazwisko:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Nazwisko" required />
            </div>
            <div id="last_name_error" class="form-error"></div>

            <label for="phone" class="form-label">Telefon:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-telephone"></i>
                </span>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Telefon" />
            </div>
            <div id="phone_error" class="form-error"></div>

            <label for="email" class="form-label">E-mail:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required />
            </div>
            <div id="email_error" class="form-error"></div>
            
            <div class="mb-2 mt-5 form-floating">
                <textarea class="form-control" name="description" id="description" style="height: 140px" placeholder="opis"></textarea>
                <label for="description">Opis</label>
            </div>
            <div id="description_error" class="form-error"></div>

            <div class="mb-2 text-center">
                <button type="submit" class="btn btn-secondary">Dodaj</button>
            </div>
        </form>
    </div>

<?php echo $footer ?>
