<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

    class detail_pesananResource extends JsonResource
    {
        /**
         * Transform the resource into an array.
         *
         * @return array<string, mixed>
         */
        public function toArray(Request $request): array
        {
            return [
                'idDetailPesanan'=> $this->id_detail_pesanan,
                // 'idPesanan'=> new pesananResource($this->whenLoaded('detail_pesanans')),
                // 'idHargaWisata'=> $this->id_harga_wisata,
                'idHargaWisata'=>new harga_wisataResource($this->whenLoaded('detailPesanans')),
                'qty'=> $this->qty,
                
            ];
        }
    }
