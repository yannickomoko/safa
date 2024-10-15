/************** Actions *****************/
	//Ajouter un lien
	function add_lien(selector)
	{
		var code='<tr> </td> <td width="150"> <select class="form-control select2 listElement" name="menu[]" required=""> </select> </td> <td style="cursor:pointer" onclick="remove_block($(this));" width="15"> <label style="display:block; margin:0px auto;" class="btn btn-danger btn-flat" title="Supprimer la ligne"><i class="fa fa-close"></i> Supprimer</label> </td> </tr>';
		selector.append(code);
	}

	//Ajouter les marchandises
	function add_goods(selector)
	{
		var code='<tr> '+
				'</td> <td width="150"> <input class="form-control " type="text" name="marchandise[]" required=""/> </td>'+
				'</td> <td width="150"> <input class="form-control " type="numerique" name="qte[]" required=""/> </td>'+
				'<td style="cursor:pointer" onclick="remove_block($(this));" width="15"> '+
				'<label style="display:block; margin:0px auto;" class="btn btn-danger btn-flat" title="Supprimer la ligne"><i class="bx bx-trash"></i> Retirer</label> '+
				'</td> </tr>';
		selector.append(code);
	}
	
	// retirer un block
	function remove_block(selector)
	{
		var toremove = selector.parent();
		toremove.remove();
	}

/************** Fin Actions *****************/


/************** Fonctions *****************/
	// ajax pour les formulaires
	function getData(selector,identi,val)
	{
		selector.click(function(e)
		{
			e.preventDefault();
			var linker=$(this).attr('data-url');//Exécution de la requête du lien de data-url (lien relatif)
			
			//alert(linker);
			if(linker !='')
			{
				$('#img_loader').css('visibility','visible');
				$.ajax(
				{
					url:linker,
					type:'GET',
					dataType:'json',
					success:function(data) //récupération du résultat de la requête
					{
						//alert (data);
						if(data.length!='')//on vérifie si la requête a renveoyé des valeurs
						{
							//alert (data);
							//alert (data[3][id] +' -- '+ data[4][val]); //on affiche quelque valeurs
							
							//Toaddoption.empty();
							$('.listElement').empty();
							for (i=0; i<data.length; i++) 
							{
								//affichage du résultat
								$('.listElement').append("<option value='" +data[i][identi]+ "'>" + data[i][val].toUpperCase() + "</option>");
							}
							$('.select2').removeClass('listElement');
							$('#img_loader').css('visibility','hidden');
						}
						else
						{
							$('.listElement').empty();
							$('.listElement').append("<option value=''> - choisir - </option>");
							$('#img_loader').css('visibility','hidden');
						}
					},
					error:function()
					{ 
						alert("Une erreur s'est produite dans le programme d'exécution"); 
					}
				});
			}
		});
	}

	function getInfo(selector,identi,val,val2)
	{
		selector.change(function(e)
		{
			e.preventDefault();
			var linker=$(this).attr('data-url')+'/'+$(this).val();//Exécution de la requête du lien de data-url (lien relatif)
			
			alert(linker);
			if(linker !='')
			{
				$('#img_loader').css('visibility','visible');
				$.ajax(
				{
					url:linker,
					type:'GET',
					dataType:'json',
					success:function(data) //récupération du résultat de la requête
					{
						//alert (data);
						if(data.length!='')//on vérifie si la requête a renveoyé des valeurs
						{
							//Toaddoption.empty();
							$('.tableLine').empty();
							for (i=0; i<data.length; i++) 
							{
								//affichage du résultat
								var j = i+1;
									table = "<tr><td>" +j
											+ "</td><td>" +data[i][identi]
											+ "</td> <td>" + data[i][val].toUpperCase() 
											+ "</td> <td>" + data[i][val2].toUpperCase() 
											+ "</td></tr>";
								
								$('.tableLine').append(table);
							}
							$('#img_loader').css('visibility','hidden');
						}
						else
						{
							$('.tableLine').empty();
							$('.tableLine').append(" Aucune donnée");
							$('#img_loader').css('visibility','hidden');
						}
					},
					error:function()
					{ 
						alert("Une erreur s'est produite dans le programme d'exécution"); 
					}
				});
			}
		});
	}

	function getInfoCmd(selector,val,val2)
	{
		selector.click(function(e)
		{
			e.preventDefault();
			var linker=$(this).attr('data-cmd')+'/'+$(this).attr('data-val');//Exécution de la requête du lien de data-url (lien relatif)
			
			//alert(linker);
			if(linker !='')
			{
				$('#img_loader').css('visibility','visible');
				$.ajax(
				{
					url:linker,
					type:'GET',
					dataType:'json',
					success:function(data) //récupération du résultat de la requête
					{
						//alert (data);
						if(data.length!='')//on vérifie si la requête a renveoyé des valeurs
						{
							//Toaddoption.empty();
							$('.tableLine').empty();
							for (i=0; i<data.length; i++) 
							{
								//affichage du résultat
								var j = i+1;
									table = "<tr><td>" +j
											+ "</td>"
											+ "<td>" + data[i][val]
											+ "</td> <td>" + data[i][val2]
											+ "<td> <select class='form-control select2 listElement' name='conteneur[]' required=''> </select></td>"
											+ "<td> <input class='form-control' type='text' name='cout[]' required=''/></td>"
											+ "</td></tr>";
								
								$('.tableLine').append(table);
							}
							$('#img_loader').css('visibility','hidden');
						}
						else
						{
							$('.tableLine').empty();
							$('.tableLine').append(" Aucune donnée");
							$('#img_loader').css('visibility','hidden');
						}
					},
					error:function()
					{ 
						alert("Une erreur s'est produite dans le programme d'exécution"); 
					}
				});
			}
		});
	}

	function getInfoMvt(selector,val,val1,val2)
	{
		selector.click(function(e)
		{
			e.preventDefault();
			var linker=$(this).attr('data-url')+'/'+$(this).attr('data-val');//Exécution de la requête du lien de data-url (lien relatif)
			
			//alert(linker);
			if(linker !='')
			{
				$('#img_loader').css('visibility','visible');
				$.ajax(
				{
					url:linker,
					type:'GET',
					dataType:'json',
					success:function(data) //récupération du résultat de la requête
					{
						//alert (data);
						if(data.length!='')//on vérifie si la requête a renveoyé des valeurs
						{
							//Toaddoption.empty();
							$('.tableLine').empty();
							for (i=0; i<data.length; i++) 
							{
								//affichage du résultat
								var j = i+1;
									table = "<tr><td>" +j
											+ "</td>"
											+ "<td>" + data[i][val]
											+ "</td> <td>" + data[i][val1]
											+ "<td> "+ data[i][val2] 
											+ "</td></tr>";
								
								$('.tableLine').append(table);
							}
							$('#img_loader').css('visibility','hidden');
						}
						else
						{
							$('.tableLine').empty();
							$('.tableLine').append(" Aucune donnée");
							$('#img_loader').css('visibility','hidden');
						}
					},
					error:function()
					{ 
						alert("Une erreur s'est produite dans le programme d'exécution"); 
					}
				});
			}
		});
	}

	function getDejaPayer(selector,val)
	{
		selector.click(function(e)
		{
			e.preventDefault();
			var linker=$(this).attr('data-url')+'/'+$(this).attr('data-val');//Exécution de la requête du lien de data-url (lien relatif)
			
			//alert(linker);
			if(linker !='')
			{
				$('#img_loader').css('visibility','visible');
				$.ajax(
				{
					url:linker,
					type:'GET',
					dataType:'json',
					success:function(data) //récupération du résultat de la requête
					{
						//alert (data);
						if(data.length!='')//on vérifie si la requête a renveoyé des valeurs
						{
							//Toaddoption.empty();
							$('.dejaVerse').empty();
							var somme = 0;
							for (i=0; i<data.length; i++) 
							{
								//affichage du résultat
								somme = somme + parseFloat(data[i][val]); 
							}
							
							var valeur = "<input type='text' class='form-control' value='"+ somme +"'  disabled/>";
							$('.dejaVerse').append(valeur);

							$('#img_loader').css('visibility','hidden');
						}
						else
						{
							$('.dejaVerse').empty();
							$('.dejaVerse').append(" Aucune donnée");
							$('#img_loader').css('visibility','hidden');
						}
					},
					error:function()
					{ 
						alert("Une erreur s'est produite dans le programme d'exécution"); 
					}
				});
			}
		});
	}

	function showInfoObjectif(selector,val,val1,val2,val3)
	{
		selector.change(function(e)
		{
			e.preventDefault();
			var linker=$(this).attr('data-url')+'/'+$(this).val();//Exécution de la requête du lien de data-url (lien relatif)
			
			//alert(linker);
			if(linker !='')
			{
				$('#img_loader').css('visibility','visible');
				$.ajax(
				{
					url:linker,
					type:'GET',
					dataType:'json',
					success:function(data) //récupération du résultat de la requête
					{
						//alert (data);
						if(data.length!='')//on vérifie si la requête a renveoyé des valeurs
						{
							//Toaddoption.empty();
							$('.tableOjectif').empty();
							for (i=0; i<data.length; i++) 
							{
								//affichage du résultat
								j = i+1;
								take = '<td>'+
	                                '<div class="form-check font-size-16">'+
	                                    '<input class="form-check-input" type="checkbox" id="orderidcheck01" value="' +data[i][val]+ '" name="rattache[]">'+
	                                    '<label class="form-check-label" for="orderidcheck01"></label>'+
	                                '</div>'+
	                            '</td>';
								$('.tableOjectif').append("<tr><td>" +j+ "</td><td>" +data[i][val1]+ "</td> <td>" + data[i][val2].toUpperCase() + "</td> <td>" + data[i][val2].toUpperCase() + "</td>"+take+"</tr>");
							}
							$('#img_loader').css('visibility','hidden');
						}
						else
						{
							$('.tableOjectif').empty();
							$('.tableOjectif').append(" Aucune donnée");
							$('#img_loader').css('visibility','hidden');
						}
					},
					error:function()
					{ 
						alert("Une erreur s'est produite dans le programme d'exécution"); 
					}
				});
			}
		});
	}
	
	///////////////////////////Appel des fonctions

	//Ajout des liens
	getData($('.AddLien'), 'id', 'name_menu');
	
	//Ajout des profil
	getData($('.AddProfil'), 'id', 'name_profil');
	
	//Ajout des conteneurs
	getData($('.detail_commande'), 'id_conteneur', 'reference_conteneur');

	//Ajout des lignes
	getInfo($('.Ajout_line_table'), 'libelle_type', 'libelle_objectif', 'description_objectif');

	//Ajout des trajets
	getInfoMvt($('.showTrajet'), 'depart_prevu', 'arrive_prevu', 'statut_mvt')

	//Ajout des lignes de commandes
	getInfoCmd($('.detail_commande'), 'bien_cmd', 'quantite_cmd');

	//Liste les verssements
	getDejaPayer($('.verse'), 'montant_verse');
	
	//Ajout des lignes d'objectif
	showInfoObjectif($('.show_objectif'), 'id_objectif', 'libelle_type', 'libelle_objectif', 'description_objectif');

/************** Fin Fonctions *****************/

