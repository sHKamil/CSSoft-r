<?php echo $header ?>

    <?php echo $navbar ?>

    <div class="container">
        <div class="text-center mt-5">
            <h2>Firmy</h2>
        </div>
        <?php if(isset($companiesWithEmployee) && !empty($companiesWithEmployee)) {?>
            <div class="accordion" id="accordionCompaniesWithEmploees">
                <?php foreach ($companiesWithEmployee as $companyWithEmployee) { ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $companyWithEmployee['id'] ?>" aria-expanded="false" aria-controls="collapse<?php echo $companyWithEmployee['id'] ?>">
                            Firma: <?php echo $companyWithEmployee['nazwa'] ?>
                        </button>
                        </h2>
                        <div id="collapse<?php echo $companyWithEmployee['id'] ?>" class="accordion-collapse collapse collapse" data-bs-parent="#accordionCompaniesWithEmploees">
                        <div class="accordion-body">
                            <div class="d-flex flex-column ">
                                <span class="mb-3 "><h6 class="mb-0">Data dodania: </h6> <?php echo $companyWithEmployee['data_dodania'] ?></span>
                                <span class="mb-3 "><h6 class="mb-0">NIP: </h6> <?php echo $companyWithEmployee['nip'] ?></span>
                                <span class="mb-3 "><h6 class="mb-0">Adres: </h6> <?php echo $companyWithEmployee['adres'] ?></span>
                                <span class="mb-3 "><h6 class="mb-0">Opis: </h6> <?php echo $companyWithEmployee['opis'] ?></span>
                                <?php if(isset($companyWithEmployee['employees']) && !empty($companyWithEmployee['employees'])){ ?>
                                <div>
                                    <span>Pracownicy:</span>
                                    <ul>
                                        <?php foreach ($companyWithEmployee['employees'] as $employee) { ?>
                                            <li>Imię: <?php echo $employee['imie'] ?>, Nazwisko: <?php echo $employee['nazwisko'] ?>, Data dodania: <?php echo $employee['data_dodania'] ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php }else{ ?>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <span class="alert alert-info">Brak danych o firmach do wyświetlenia.</span>
            </div>
        <?php } ?>

        <div class="text-center mt-5">
            <h2>Pracownicy</h2>
        </div>
        <?php if(isset($employeesWithCompanyName) && !empty($employeesWithCompanyName)) {?>
            <div class="accordion" id="accordionEmployees">
                <?php foreach ($employeesWithCompanyName as $employeeWithCompanyName) { ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmployee<?php echo $employeeWithCompanyName['id'] ?>" aria-expanded="false" aria-controls="collapseEmployee<?php echo $employeeWithCompanyName['id'] ?>">
                            Pracownik: <?php echo $employeeWithCompanyName['imie'] . " " .  $employeeWithCompanyName['nazwisko'] ?>
                        </button>
                        </h2>
                        <div id="collapseEmployee<?php echo $employeeWithCompanyName['id'] ?>" class="accordion-collapse collapse collapse" data-bs-parent="#accordionEmployees">
                        <div class="accordion-body">
                            <div class="d-flex flex-column ">
                                <span class="mb-3 "><h6 class="mb-0">Data dodania: </h6> <?php echo $employeeWithCompanyName['data_dodania'] ?></span>
                                <span class="mb-3 "><h6 class="mb-0">Telefon: </h6> <?php echo $employeeWithCompanyName['telefon'] ?></span>
                                <span class="mb-3 "><h6 class="mb-0">E-mail: </h6> <?php echo $employeeWithCompanyName['email'] ?></span>
                                <span class="mb-3 "><h6 class="mb-0">Opis: </h6> <?php echo $employeeWithCompanyName['opis'] ?></span>
                                <?php if(isset($employeeWithCompanyName['nazwa_firmy']) && !empty($employeeWithCompanyName['nazwa_firmy'])){ ?>
                                <span class="mb-3 "><h6 class="mb-0">Nazwa firmy: </h6> <?php echo $employeeWithCompanyName['nazwa_firmy'] ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php }else{ ?>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <span class="alert alert-info">Brak danych o pracownikach do wyświetlenia.</span>
            </div>
        <?php } ?>
    </div>

<?php echo $footer ?>
