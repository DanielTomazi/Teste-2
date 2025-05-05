<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $oabs = [
            'Ceará' => [
                'name' => 'OAB-CE',
                'link' => 'https://oabce.org.br/',
                'isPartner' => true
            ],
            'Acre' => [
                'name' => 'OAB-AC',
                'link' => 'https://oabac.org.br/',
                'isPartner' => false
            ],
            'Alagoas' => [
                'name' => 'OAB-AL',
                'link' => 'https://www.oab-al.org.br/',
                'isPartner' => false
            ],
            'Amazonas' => [
                'name' => 'OAB-AM',
                'link' => 'https://www.oabam.org.br/',
                'isPartner' => false
            ],
            'Amapá' => [
                'name' => 'OAB-AP',
                'link' => 'https://www.oabap.org.br/',
                'isPartner' => false
            ],
            'Bahia' => [
                'name' => 'OAB-BA',
                'link' => 'https://www.oab-ba.org.br/',
                'isPartner' => false
            ],
            'Distrito Federal' => [
                'name' => 'OAB-DF',
                'link' => 'http://www.oabdf.org.br/',
                'isPartner' => false
            ],
            'Espírito Santo' => [
                'name' => 'OAB-ES',
                'link' => 'https://www.oabes.org.br/',
                'isPartner' => false
            ],
            'Goiás' => [
                'name' => 'OAB-GO',
                'link' => 'https://www.oabgo.org.br/',
                'isPartner' => false
            ],
            'Maranhão' => [
                'name' => 'OAB-MA',
                'link' => 'https://www.oabma.org.br/',
                'isPartner' => false
            ],
            'Minas Gerais' => [
                'name' => 'OAB-MG',
                'link' => 'https://www.oabmg.org.br/',
                'isPartner' => false
            ],
            'Mato Grosso do Sul' => [
                'name' => 'OAB-MS',
                'link' => 'https://oabms.org.br/',
                'isPartner' => false
            ],
            'Mato Grosso' => [
                'name' => 'OAB-MT',
                'link' => 'https://www.oabmt.org.br/',
                'isPartner' => false,
            ],
            'Pará' => [
                'name' => 'OAB-PA',
                'link' => 'https://www.oabpa.org.br/',
                'isPartner' => false
            ],
            'Paraíba' => [
                'name' => 'OAB-PB',
                'link' => 'https://www.oabpb.org.br/',
                'isPartner' => false
            ],
            'Pernambuco' => [
                'name' => 'OAB-PE',
                'link' => 'https://www.oabpe.org.br/',
                'isPartner' => false
            ],
            'Piauí' => [
                'name' => 'OAB-PI',
                'link' => 'http://www.oabpi.org.br/',
                'isPartner' => false
            ],
            'Parána' => [
                'name' => 'OAB-PR',
                'link' => 'https://www.oabpr.org.br/',
                'isPartner' => false
            ],
            'Rio de Janeiro' => [
                'name' => 'OAB-RJ',
                'link' => 'https://www.oabrj.org.br/',
                'isPartner' => false
            ],
            'Rio Grande do Norte' => [
                'name' => 'OAB-RN',
                'link' => 'https://www.oabrn.org.br/',
                'isPartner' => false
            ],
            'Rondônia' => [
                'name' => 'OAB-RO',
                'link' => 'https://www.oab-ro.org.br/',
                'isPartner' => false
            ],
            'Roraima' => [
                'name' => 'OAB-RR',
                'link' => 'https://www.oabrr.org.br/',
                'isPartner' => false
            ],
            'Rio Grande do Sul' => [
                'name' => 'OAB-RS',
                'link' => 'https://www.oabrs.org.br/',
                'isPartner' => false
            ],
            'Santa Catarina' => [
                'name' => 'OAB-SC',
                'link' => 'https://www.oab-sc.org.br/',
                'isPartner' => false
            ],
            'Sergipe' => [
                'name' => 'OAB-SE',
                'link' => 'https://oabsergipe.org.br/',
                'isPartner' => false
            ],
            'São Paulo' => [
                'name' => 'OAB-SP',
                'link' => 'https://www.oabsp.org.br/',
                'isPartner' => false
            ],
            'Tocantins' => [
                'name' => 'OAB-TO',
                'link' => 'https://www.oabto.org.br/',
                'isPartner' => false
            ]
        ];

        return view('.home.home', compact('oabs'));
    }
}
