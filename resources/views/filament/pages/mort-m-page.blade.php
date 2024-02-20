<x-filament-panels::page>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <th scope="col" class="px-6 py-3" >X</th>
                <th scope="col" class="px-6 py-3" >lx</th>
                <th scope="col" class="px-6 py-3" >dx</th>
                <th scope="col" class="px-6 py-3" >qx</th>
                <th scope="col" class="px-6 py-3" >px</th>
                <th scope="col" class="px-6 py-3" >&pound;lx</th>
                <th scope="col" class="px-6 py-3" >ex</th>
                <th scope="col" class="px-6 py-3" >mx</th>
                <th scope="col" class="px-6 py-3" >Dx</th>
                <th scope="col" class="px-6 py-3" >Cx</th>
                <th scope="col" class="px-6 py-3" >Nx</th>
                <th scope="col" class="px-6 py-3" >Mx</th>
                <th scope="col" class="px-6 py-3" >(Va)x</th>
                <th scope="col" class="px-6 py-3" >(Va)x^12</th>
                <th scope="col" class="px-6 py-3" >(Va)x^2</th>
                <th scope="col" class="px-6 py-3" >(Va)x^12</th>
                <th scope="col" class="px-6 py-3" >(Va)x^2</th>
                <th scope="col" class="px-6 py-3" >Rj - 14</th>
                <th scope="col" class="px-6 py-3" >Rj - 13</th>
                <th scope="col" class="px-6 py-3" >"Rj</th>
                <th scope="col" class="px-6 py-3" >Ax</th>
                <th scope="col" class="px-6 py-3" bgcolor="#000099"></th>
                <th scope="col" class="px-6 py-3" >X(y+n)</th>
                <th scope="col" class="px-6 py-3" >(Va)y </th>
                <th scope="col" class="px-6 py-3" >(Va)^(y+n)</th>
                <th scope="col" class="px-6 py-3" >Dx:x</th>
                <th scope="col" class="px-6 py-3" >Nx:x</th>
                <th scope="col" class="px-6 py-3" >(Va)y,x</th>
                <th scope="col" class="px-6 py-3" >(Va)y/x</th>
                <th scope="col" class="px-6 py-3" >(Va)y/x^12</th>
                <th scope="col" class="px-6 py-3" > (Va)y/x^n </th>
                <th scope="col" class="px-6 py-3" > Rs - 14 </th>
                <th scope="col" class="px-6 py-3" > Rs - 13 </th>
                <th scope="col" class="px-6 py-3" > "Rs</th>
            </thead>
            <tbody>
                @foreach ($mort_m_s as $mort_m)
                    <tr>
                        <td>{{ $mort_m->edad }}</td>
                        <td>{{ $mort_m->lx }}</td>
                        <td>{{ $this->total1 = $mort_m->lx - $this->calcular($mort_m->id, 'dx') }}</td>
                        <td>{{ $this->total2 = round($mort_m->dx / $mort_m->lx,8) }}</td>
                        <td>{{ 1 - $this->total2,8 }}</td>
                        <td>{{ $this->total4 = $this->calcular($mort_m->id, 'ny')  }}</td>
                        <td>{{  round(($this->calcular($mort_m->id, 'ey') / $mort_m->lx) + .5,8) }}</td>
                        @php
                            $this->total5 = round(($this->calcular($mort_m->id, 'ey') / $mort_m->lx) + .5);
                        @endphp
                        <td>
                            @if ($this->calcular($mort_m->id, 'my-2') != 0)
                            {{ round(($this->calcular($mort_m->id, 'my') - $this->calcular($mort_m->id, 'my-2'))/(2*$mort_m->lx),8) }}
                            @else
                                0
                            @endif
                        </td>
                        @php
                            $this->total6 = ($this->calcular($mort_m->id, 'my')-$this->calcular($mort_m->id, 'my-2'))/(2*$mort_m->lx);

                            $suma = ((1/(1+$this->numero)));
                            $exponente = pow ($suma, $mort_m->edad);
                            $this->total7 = $exponente * $mort_m->lx;
                        @endphp
                        <td>{{ number_format($this->total7) }}</td>
                        @php
                            $suma = ((1/(1+$this->numero)));
                            $exponente = pow ($suma, ($mort_m->edad+1));
                            $this->total_8 = $exponente * $mort_m->dx;
                        @endphp
                        <td>{{ round($this->total_8, 7) }}</td>
                        <td>{{ number_format($this->calcular($mort_m->id, 'dx_2')) }}</td>
                        <td>{{ round($this->calcular($mort_m->id, 'r_2'),4) }}</td>
                        <td>{{ round(($this->calcular($mort_m->id, 'nx')/ $mort_m->dx_2)+1, 7) }}</td>
                        @php
                            $inflacion_1 = ((1+(11/24)*$this->inflacion)*($mort_m->vax-1)+((11/24)*(1+$this->inflacion)));
                        @endphp
                        <td>{{ round(((1+(11/24)*$this->inflacion)*($mort_m->vax-1)+((11/24)*(1+$this->inflacion))),7) }}</td>
                        <td>{{ round(((1+(1/4)*$this->inflacion)*($mort_m->vax-1)+((1/4)*(1+$this->inflacion))),7) }}</td>
                        <td>{{ round(((1+(11/24)*$this->inflacion)/(1 + $this->inflacion)*($mort_m->vax-1)+((11/24))),7) }}</td>
                        <td>{{ round(((1+(1/4)*$this->inflacion)/(1 + $this->inflacion)*($mort_m->vax-1)+((1/4))),7) }}</td>
                        <td>{{ round($mort_m->vax12*12+$mort_m->vax2*2,7) }}</td>
                        <td>{{ round($mort_m->vax12*12+$mort_m->vax2*1,7) }}</td>
                        <td>{{ round($mort_m->vax12_2*12+$mort_m->vax2_2*2,7) }}</td>
                        <td>{{ round($mort_m->mx_2 / $mort_m->dx_2,7) }}</td>
                        <td style="background:#000099 !important"></td>

                        @if ($mort_m->edad - $this->diferencia < 0)
                            <td>0</td>
                            @php
                                $total_aux = 0;
                            @endphp
                        @else
                            <td>{{ $mort_m->edad - $this->diferencia }}</td>
                            @php
                                $total_aux = $mort_m->edad - $this->diferencia;
                            @endphp
                        @endif
                        <td>Faltan datos</td>
                        <td>
                            @if ($total_aux < 15)
                                {{ $this->calcular($mort_m->id, 'vaxn2') }}
                                @php
                                    $this->total_11 = $this->calcular($mort_m->id, 'vaxn2');
                                @endphp
                            @else
                                {{ $this->calcular($mort_m->id, 'vaxn2_2') }}
                                @php
                                    $this->total_11 = $this->calcular($mort_m->id, 'vaxn2_2');
                                @endphp
                            @endif
                        </td>
                        <td>
                            @if ($mort_m->w_m <15)
                                {{ "" }}
                            @else
                                @php
                                    $is2 = pow((1/(1+$this->numero)),($mort_m->edad+$mort_m->w_m)/2);
                                    $mifin2 = $is2 * $mort_m->lx;
                                    // $registro_dxy['ly'];
                                    // $ultimo = $mifin2 * $registro_dxy['ly'];
                                    // echo $total12 = $ultimo/100000000;

                                    // if ($total12 == 0 or empty($total12)){
                                    //         $ultimo = $mifin2 * $registro_11['ly'];
                                    //     echo  $total12 = $ultimo/100000000 ;


                                    // }
                                @endphp
                                {{ "Faltan datos" }}
                            @endif
                        </td>
                        <td>
                            @if ($mort_m->w_m < 15)
                                {{ "" }}
                            @else
                            {{ round($this->calcular($mort_m->id, 'z_m'),7) }}
                            @endif
                        </td>
                        <td>
                            @if ($mort_m->w_m <15)
                                {{ "" }}
                            @else
                                {{ round($this->calcular($mort_m->id, 'aa_m') / $mort_m->z_m, 7) }}
                            @endif
                        </td>
                        <td>
                            @if ($mort_m->w_m <15)
                                {{ "" }}
                                @php
                                    $this->total_15 = "";
                                @endphp
                            @else
                                {{ round($this->total_11 - $mort_m->ab_m,7) }}
                                @php
                                    $this->total_15 = $this->total_11 - $mort_m->ab_m;
                                @endphp
                            @endif
                        </td>
                        <td>
                            @if ($mort_m->w_m <15)
                                {{ "" }}
                                @php
                                    $this->total_16 = "";
                                @endphp
                            @else
                                {{ round((1+(11/24)*$this->inflacion)*$this->total_15,7) }}
                                @php
                                    $this->total_16 = (1+(11/24)*$this->inflacion)*$this->total_15;
                                @endphp
                            @endif
                        </td>
                        <td>
                            @if ($mort_m->w_m <15)
                                {{ "" }}
                                @php
                                    $this->total_17 = "";
                                @endphp
                            @else
                                {{ round((1+(1/4)*$this->inflacion)*$this->total_15,7) }}
                                @php
                                    $this->total_17 = (1+(1/4)*$this->inflacion)*$this->total_15;
                                @endphp
                            @endif
                        </td>

                        <td>
                            @if ($mort_m->w_m <15)
                                {{ "" }}
                                @php
                                    $this->total_18 = "";
                                @endphp
                            @else
                                {{ round($this->total_16*12+$this->total_17*2, 7) }}
                                @php
                                    $this->total_18 = $this->total_16*12+$this->total_17*2;
                                @endphp
                            @endif
                        </td>

                        <td>
                            @if ($mort_m->w_m <15)
                                {{ "" }}
                                @php
                                    $this->total_19 = "";
                                @endphp
                            @else
                                {{ round($this->total_16*12+$this->total_17*1, 7) }}
                                @php
                                    $this->total_19 = $this->total_16*12+$this->total_17*1;
                                @endphp
                            @endif
                        </td>

                        <td>
                            @if ($mort_m->w_m <15)
                                {{ "" }}
                            @else
                                {{ round($this->total_18/(1+$this->inflacion),7) }}
                            @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-filament-panels::page>
