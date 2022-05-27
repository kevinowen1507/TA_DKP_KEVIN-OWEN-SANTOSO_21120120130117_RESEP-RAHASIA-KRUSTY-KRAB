<?php
  class resep{
    protected $resep;
    
    public function __construct(){
        $this->resep=[
            // data resep
            (object)[
              'nama_resep' => 'krabby patty',
              'alat_bahan' => "<ol>
                <li>4 buah bawang</li>
                <li>4 sdm gula pasir</li>
                <li>4 sdm merica</li>
                <li>400 gr plankton</li>
                <li>1 sdm micin</li>
                </ol>",

              'cara_membuat' => "<ol>
                <li>Campur semua bahan/li>
                <li>bentuk bulat</li>
                <li>panaskan di wajan panas 2 menit tiap sisi</li>
                <li>Sajikan</li>
                </ol>",
              'dijual'=> 'biasa dijual dengan harga 25K sampai 50K',
            ],
            (object)[
              'nama_resep' => 'soft drink',
              'alat_bahan' => "<ol>
                <li>4 buah bawang</li>
                <li>4 sdm gula pasir</li>
                <li>4 sdm merica</li>
                <li>400 gr plankton</li>
                <li>1 sdm micin</li>
                </ol>",


                'cara_membuat' => "<ol>
                <li>Campur semua bahan/li>
                <li>bentuk bulat</li>
                <li>panaskan di wajan panas 2 menit tiap sisi</li>
                <li>Sajikan</li>
                </ol>",
              'dijual'=> 'biasa dijual dengan harga 25K sampai 50K',
            ],
            (object)[
              'nama_resep' => 'french fries',
              'alat_bahan' => "<ol>
                <li>4 buah bawang</li>
                <li>4 sdm gula pasir</li>
                <li>4 sdm merica</li>
                <li>400 gr plankton</li>
                <li>1 sdm micin</li>
                </ol>",


                'cara_membuat' => "<ol>
                <li>Campur semua bahan/li>
                <li>bentuk bulat</li>
                <li>panaskan di wajan panas 2 menit tiap sisi</li>
                <li>Sajikan</li>
                </ol>",
              'dijual'=> 'biasa dijual dengan harga 25K sampai 50K',
            ],
            (object)[
              'nama_resep' => 'hot dog',
              'alat_bahan' => "<ol>
                <li>4 buah bawang</li>
                <li>4 sdm gula pasir</li>
                <li>4 sdm merica</li>
                <li>400 gr plankton</li>
                <li>1 sdm micin</li>
                </ol>",


                'cara_membuat' => "<ol>
                <li>Campur semua bahan/li>
                <li>bentuk bulat</li>
                <li>panaskan di wajan panas 2 menit tiap sisi</li>
                <li>Sajikan</li>
                </ol>",
              'dijual'=> 'biasa dijual dengan harga 25K sampai 50K',
            ]
            // ....dst
          ];
  }
  public function resep($no){
   echo $this->resep[$no]->nama_resep;
  }
  public function bahan($no){
    echo $this->resep[$no]->alat_bahan;
   }
   public function pembuatan($no){
    echo $this->resep[$no]->cara_membuat;
   }
   public function dijual($no){
    echo $this->resep[$no]->dijual;
   }
 }


?>