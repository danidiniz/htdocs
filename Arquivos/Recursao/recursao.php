<?php


$hierarquia = array(

	array(
		'cargo' => 'CEO',
		'subordinados' => array(
			array(
				'cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					array(
						'cargo'=>'Gerente de Vendas'
					)
				)
			),
			array(
				'cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					array(
						'cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							array(
								'cargo'=>'Supervisor de Suprimentos'
							)
						)
					),
					array(
						'cargo'=>'Gerente Financeiro',
						'subordinados'=>array(
							array(
								'cargo'=>'Supervisor de Contas a Pagar'
							)
						)
					)
				)
			)
		)
	)
);

function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= '<li>';
		$html .= $cargo['cargo'];
		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}
		$html .= '</li>';
	}
	$html .= '</ul>';
	return $html;
}

echo exibe($hierarquia);

?>