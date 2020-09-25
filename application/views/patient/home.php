<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
					<h4 class="page-title">Pacientes</h4>
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
							<a href="<?=base_url('patient')?>">Pacientes</a>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Listar de Pacientes</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Adicionar
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" data-backdrop="static" data-keyboard="false" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Adicionar</span> 
														<span class="fw-light">
															Paciente
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form method="post" enctype="multipart/form-data" action="<?=base_url('patient/adicionar')?>">
														<div class="row">

															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Foto</label>
																	<input id="photograph" name="photograph" type="file" class="form-control">
																</div>
															</div>

															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nome * </label>
																	<input id="name" name="name" type="text" required class="form-control" placeholder="Informe seu nome completo.">
																</div>
															</div>

															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>Nome da Mãe *</label>
																	<input id="nameMother" name="nameMother" type="text" required class="form-control" placeholder="Informe o nome Completo da Mãe.">
																</div>
															</div>

															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Data de Nascimento *</label>
																	<input id="birthday" name="birthday" type="date" required class="form-control">
																</div>
															</div>
												
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>CPF *</label>
																	<input id="cpf" name="cpf" type="text" required class="form-control maskCPF" placeholder="Informe o Cpf ou Cnpj.">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>CNS*</label>
																	<input id="cns" name="cns" type="text" required class="form-control" placeholder="Informe o CNS.">
																</div>
															</div>

															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>CEP *</label>
																	<input id="cep" name="cep" type="text" required class="form-control maskCEP" placeholder="Informe o Cep.">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Rua *</label>
																	<input id="address" name="address" type="text" required class="form-control" placeholder="Informe a Rua.">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Número *</label>
																	<input id="number" name="number" type="text" required class="form-control" placeholder="Informe o Número.">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Complemento *</label>
																	<input id="complement" name="complement" type="text" required class="form-control" placeholder="Informe o Complemento.">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Bairro</label>
																	<input id="neighborhood" name="neighborhood" type="text" required class="form-control" placeholder="Informe o Bairro.">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Cidade</label>
																	<input id="city" name="city" type="text" required class="form-control" placeholder="Informe a Cidade.">
																</div>
															</div>

															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Estado</label>
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
														<div class="modal-footer no-bd">
															<button type="submit" required class="btn btn-primary">Salvar</button>
															<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
														</div>

													</form>
												</div>
											</div>
										</div>
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

									<div class="table-responsive">
										<table id="add-row" class="display table  table-hover" >
											<thead>
												<tr>
													<th>Nome</th>
													<th>CPF</th>
													<th>CNS</th>
													<th style="width: 10%">Ações</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Nome</th>
													<th>CPF</th>
													<th>CNS</th>
													<th>Ações</th>
												</tr>
											</tfoot>
											<tbody>
											<?php foreach($patient as $pat): ?>
											<tr> 
												<td><?= $pat->name ?></td>
												<td><?= $pat->cpf ?></td>
												<td><?= $pat->cns ?></td>
												<td>
												<div class="dropdown">
												
                                                    <a 
														class="fa fa-cogs mr-2"
                                                        href="#"
                                                        id="dropdownMenuLink"
                                                        data-toggle="dropdown"
                                                        aria-expanded="false"> 
                                                    </a>
													
													<div style=""class="dropdown-menu" aria-labelledby="dropdownMenuLink">
													<a class="dropdown-item" href="<?=base_url('patient/visualizar/'.$pat->id_patient)?>" type="button" data-toggle="tooltip" title="Visualizar" data-original-title="Visualizar">
													<i class="fa fa-eye mr-1" ></i>Visualizar</a>
													<a class="dropdown-item" type="button" data-toggle="modal" data-target="#deleteModal" title="Excluir" data-original-title="Excluir">
													<i  class="fa fa-times mr-2"></i>Excluir</a>
													</div>
													<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-body">
																		<div class="row">
																			<div class="col-sm-12">
																			<h4 >Dejesar realmente excluir o Paciente:</h4>
																			<h3 ><?= $pat->name ?></h3>
																			<h5>A exclusão de um Paciente pode causar perca de dados e altarações em informações importante no sistema.</h5>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer no-bd">
																	<a href="<?=base_url('patient/excluir/'.$pat->id_patient)?>" type="button" class="btn btn-danger btn-block">Excluir</a>
                                        							<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
																	</div>
																</div>
															</div>
													</div>	
												</td>
											</tr>
											<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>