<?php 

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',	
		'subordinados' => array(
			// Inicio: Diretor
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					//Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					// Gerente de Vendas
				)
			),
			// Termino: Diretor Comercial
			// Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' =>array(
					// Inicio: Gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a pagar',
						'subordinados' =>array(
							// Inicio Supervisor de Pagamento
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							// Fim Supervisor de Pagamento
						) 
					),
					// Fim: Gerente de Contas a pagar
					// Inicio do Gerente de Compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							// Inicio Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos',
								'subordinados'=> array(
									// Inicio
									array(
										'nome_cargo' => 'Comprador'
									)
									// Fim
								)
							)
							// Fim Supervisor de Suprimentos
						)
					)
					// Fim Gerente de Compras
				)
			)
			// Termino Diretor Financeiro
		)	
	)
);

echo "<pre>";

//var_dump($hierarquia);

function exibe($cargos) {
	$html = '<ul>';
	foreach ($cargos as $cargo) {
		$html .= '<li>'; 
		$html .= $cargo['nome_cargo']; 
		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ) {
			$html .= exibe($cargo['subordinados']);
		}
		$html .= '</li>'; 
	}
	$html .= '</ul>';
	return $html;
}

echo exibe($hierarquia);