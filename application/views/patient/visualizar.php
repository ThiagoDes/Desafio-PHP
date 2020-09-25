<div class="main-panel">
<div class="content">
<div class="page-inner">
<div class="page-header">
   <h4 class="page-title">Editar</h4>
   <ul class="breadcrumbs">
      <li class="nav-home">
         <a href="<?=base_url()?>">
         <i class="flaticon-home"></i>
         </a>
      </li>
      <li class="separator">
         <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
         <a href="<?=base_url('patient')?>">Paciente</a>
      </li>
   </ul>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <div class="card-title">Editar Paciente - <?=$patient->name?></div>
         </div>
            <?php if($this->session->sucesso):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?=$this->session->sucesso?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <?php elseif($this->session->erro): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <?=$this->session->erro?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <?php endif ?>
         <div class="card-body">
            <div class="row">
               <form method="post" action="<?=base_url('patient/editar/'.$patient->id_patient)?>">
                  <div class="row">
                     <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                           <label>Foto</label>
                           <input id="photograph" name="Photograph" type="file" class="form-control">
                        </div>
                        <div class="form-group ">
                           <label>Nome * </label>
                           <input id="name" name="name" value="<?=$patient->name?>" type="text" required class="form-control" placeholder="Informe seu nome completo.">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <div class="form-group ">
                           <label>Nome da Mãe *</label>
                           <input id="nameMother" name="nameMother" value="<?=$patient->mother_name?>" type="text" required class="form-control" placeholder="Informe o nome Completo da Mãe.">
                        </div>
                        <div class="form-group">
                           <label>Data de Nascimento *</label>
                           <input id="birthday" name="birthday" type="date" value="<?=$patient->birthday?>" required class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <div class="form-group ">
                           <label>CPF *</label>
                           <input id="cpf" name="cpf" type="text" required class="form-control maskCPF" value="<?=$patient->cpf?>" placeholder="Informe o Cpf ou Cnpj.">
                        </div>
                        <div class="form-group">
                           <label>CNS*</label>
                           <input id="cns" name="cns" type="text" required class="form-control" value="<?=$patient->cns?>" placeholder="Informe o CNS.">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                           <label>CEP *</label>
                           <input id="cep" name="cep" type="text" required class="form-control maskCEP" value="<?=$patient->cep?>" placeholder="Informe o Cep.">
                        </div>
                        <div class="form-group">
                           <label>Rua *</label>
                           <input id="address" name="address" type="text" required class="form-control" value="<?=$patient->address?>"  placeholder="Informe a Rua.">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                           <label>Número *</label>
                           <input id="number" name="number" type="text" required class="form-control" value="<?=$patient->number?>" placeholder="Informe o Número.">
                        </div>
                        <div class="form-group">
                           <label>Complemento *</label>
                           <input id="complement" name="complement" type="text"  class="form-control" value="<?=$patient->complement?>" placeholder="Informe o Complemento.">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                           <label>Bairro</label>
                           <input id="neighborhood" name="neighborhood" type="text" value="<?=$patient->neighborhood?>" class="form-control" placeholder="Informe o Bairro.">
                        </div>
                        <div class="form-group ">
                           <label>Cidade</label>
                           <input id="city" name="city" type="text" required value="<?=$patient->city?>" class="form-control" placeholder="Informe a Cidade.">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-12">
                        <div class="form-group ">
                           <label>UF</label>
                           <select id="uf" name="uf" value="" class="form-control">
                              <option value="">Selecione seu Estado</option>
                              <option value="AC">Acre</option>
                              <option value="AL">Alagoas</option>
                              <option value="AP">Amapá</option>
                              <option value="AM">Amazonas</option>
                              <option value="BA">Bahia</option>
                              <option value="CE">Ceará</option>
                              <option value="DF">Distrito Federal</option>
                              <option value="ES">Espírito Santo</option>
                              <option value="GO">Goiás</option>
                              <option value="MA">Maranhão</option>
                              <option value="MT">Mato Grosso</option>
                              <option value="MS">Mato Grosso do Sul</option>
                              <option value="MG">Minas Gerais</option>
                              <option value="PA">Pará</option>
                              <option value="PB">Paraíba</option>
                              <option value="PR">Paraná</option>
                              <option value="PE">Pernambuco</option>
                              <option value="PI">Piauí</option>
                              <option value="RJ">Rio de Janeiro</option>
                              <option value="RN">Rio Grande do Norte</option>
                              <option value="RS">Rio Grande do Sul</option>
                              <option value="RO">Rondônia</option>
                              <option value="RR">Roraima</option>
                              <option value="SC">Santa Catarina</option>
                              <option value="SP">São Paulo</option>
                              <option value="SE">Sergipe</option>
                              <option value="TO">Tocantins</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <button type="submit" required class="btn btn-primary">Salvar</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function (){
         $('#estado').val('<?=$patient->uf?>');
       });
</script>