<?php echo $header ?>

    <?php echo $navbar ?>

    <div class="container my-5 p-md-5 p-3 border border-secondary rounded-4">
        <div class="text-center">
            <h2>Dodaj nową firmę</h2>
        </div>
        <form id="companyForm" method="POST">
            <label for="company_name" class="form-label">Nazwa Firmy</label>
            <div class="input-group mb-2">
                <span class="input-group-text">
                    <i class="bi bi-buildings"></i>
                </span>
                <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Nazwa firmy" required />
            </div>
            <div id="name_error" class="form-error"></div>
            <label for="address" class="form-label">Adres:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-geo-alt"></i>
                </span>
                <input type="text" name="address" id="address" class="form-control" placeholder="Adres" />
            </div>
            <div id="address_error" class="form-error"></div>
            <label for="nip" class="form-label">NIP:</label>
            <div class="mb-2 input-group">
                <span class="input-group-text">
                    <i class="bi bi-file-earmark-binary"></i>
                </span>
                <input type="number" name="nip" id="nip" class="form-control" placeholder="NIP" required />
            </div>
            <div id="nip_error" class="form-error"></div>
            <div class="mb-2 mt-5 form-floating">
                <textarea class="form-control" name="description" id="description" style="height: 140px" placeholder="opis"></textarea>
                <label for="description">Opis działalności</label>
            </div>
            <div id="description_error" class="form-error"></div>

            <div class="mb-2 text-center">
                <button type="submit" class="btn btn-secondary">Dodaj</button>
            </div>
        </form>
    </div>

<?php echo $footer ?>
