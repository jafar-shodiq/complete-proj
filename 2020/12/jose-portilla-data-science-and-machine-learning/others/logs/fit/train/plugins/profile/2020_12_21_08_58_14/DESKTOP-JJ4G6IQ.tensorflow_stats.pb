"?O
DDeviceIDLE"IDLE1?????ƠBA?????ƠBQ      ??Y      ???Unknown
uHostFlushSummaryWriter"FlushSummaryWriter(1ffff??@9ffff??@Affff??@Iffff??@aM)~??iM)~???Unknown?
BHostIDLE"IDLE133333??@A33333??@a??<rt??i?D?]????Unknown
?HostRandomUniform"7sequential/dropout/dropout/random_uniform/RandomUniform(1??????P@9??????P@A??????P@I??????P@a???M??T?i?`<?????Unknown
?HostResourceApplyAdam"$Adam/Adam/update_2/ResourceApplyAdam(133333?N@933333?N@A33333?N@I33333?N@aZ?q4;?R?i`I???????Unknown
iHostWriteSummary"WriteSummary(1333333K@9333333K@A333333K@I333333K@a?>5?L?P?i??K?V????Unknown?
?HostDataset"?Iterator::Model::ParallelMapV2::Zip[0]::FlatMap[0]::Concatenate(1?????YG@9?????YG@A?????E@I?????E@aӫ???I?i??>=Ҩ???Unknown
oHost_FusedMatMul"sequential/dense/Relu(1?????YC@9?????YC@A?????YC@I?????YC@a)+E7??G?i????Ǯ???Unknown
?	HostResourceApplyAdam""Adam/Adam/update/ResourceApplyAdam(133333?A@933333?A@A33333?A@I33333?A@a????>F?i??p?O????Unknown
?
HostRandomUniform"9sequential/dropout_1/dropout/random_uniform/RandomUniform(1     @@@9     @@@A     @@@I     @@@a	?z?D?i^w??P????Unknown
?HostDataset"5Iterator::Model::ParallelMapV2::Zip[1]::ForeverRepeat(1ffffff;@9ffffff;@A??????6@I??????6@a?R?\?<?ih?`Ӽ???Unknown
?HostResourceApplyAdam"$Adam/Adam/update_5/ResourceApplyAdam(1      4@9      4@A      4@I      4@a
 !ˣ8?i??\??????Unknown
?HostResourceApplyAdam"$Adam/Adam/update_4/ResourceApplyAdam(1fffff?2@9fffff?2@Afffff?2@Ifffff?2@aQ??S?H7?i?P??????Unknown
xHostDataset"#Iterator::Model::ParallelMapV2::Zip(133333?W@933333?W@Affffff/@Iffffff/@a??J?W3?i???;????Unknown
dHostDataset"Iterator::Model(1?????L9@9?????L9@A??????.@I??????.@a???7v?2?iq??????Unknown
gHostStridedSlice"strided_slice(1??????.@9??????.@A??????.@I??????.@a???7v?2?i? YG?????Unknown
{HostMatMul"'gradient_tape/sequential/dense_2/MatMul(1      -@9      -@A      -@I      -@anj>j&?1?i?H&?-????Unknown
{HostMatMul"'gradient_tape/sequential/dense_1/MatMul(1??????)@9??????)@A??????)@I??????)@a-?????/?i???&????Unknown
}HostMatMul")gradient_tape/sequential/dense_1/MatMul_1(1??????)@9??????)@A??????)@I??????)@a-?????/?i??[+????Unknown
yHostMatMul"%gradient_tape/sequential/dense/MatMul(1??????'@9??????'@A??????'@I??????'@a?-?FR-?i~??O?????Unknown
qHost_FusedMatMul"sequential/dense_1/Relu(1??????'@9??????'@A??????'@I??????'@a?-?FR-?iQrt?????Unknown
^HostGatherV2"GatherV2(1ffffff'@9ffffff'@Affffff'@Iffffff'@a?o?6?,?i8???????Unknown
eHost
LogicalAnd"
LogicalAnd(1??????&@9??????&@A??????&@I??????&@a?R?\?,?i??($X????Unknown?
?HostResourceApplyAdam"$Adam/Adam/update_1/ResourceApplyAdam(1333333&@9333333&@A333333&@I333333&@a|5₦Y+?i?ݐ?????Unknown
[HostAddV2"Adam/add(1333333&@9333333&@A333333&@I333333&@a|5₦Y+?i?X?????Unknown
?HostResourceApplyAdam"$Adam/Adam/update_3/ResourceApplyAdam(1??????%@9??????%@A??????%@I??????%@ahw3?~?*?i:??q????Unknown
sHostDataset"Iterator::Model::ParallelMapV2(1      $@9      $@A      $@I      $@a
 !ˣ(?iL??M?????Unknown
tHost_FusedMatMul"sequential/dense_2/BiasAdd(1??????!@9??????!@A??????!@I??????!@a???ۮ%?i?N;V????Unknown
lHostIteratorGetNext"IteratorGetNext(1ffffff@9ffffff@Affffff@Iffffff@a7?=??"?i??ځ????Unknown
|HostSelect"(binary_crossentropy/logistic_loss/Select(1      @9      @A      @I      @aؘJ?z"?ih????????Unknown
?HostDynamicStitch"/gradient_tape/binary_crossentropy/DynamicStitch(1      @9      @A      @I      @aؘJ?z"?i?C5?????Unknown
? HostTile"6gradient_tape/binary_crossentropy/weighted_loss/Tile_1(1333333@9333333@A333333@I333333@a??c??!?i??! ?????Unknown
?!HostBiasAddGrad"4gradient_tape/sequential/dense_2/BiasAdd/BiasAddGrad(1      @9      @A      @I      @a?!/? ?i?.A?????Unknown
Y"HostPow"Adam/Pow(1ffffff@9ffffff@Affffff@Iffffff@a?J????i??=??????Unknown
?#HostCast"Tbinary_crossentropy/ArithmeticOptimizer/ReorderCastLikeAndValuePreserving_int64_Cast(1ffffff@9ffffff@Affffff@Iffffff@a?J????i??M9?????Unknown
?$HostGreaterEqual"'sequential/dropout/dropout/GreaterEqual(1ffffff@9ffffff@Affffff@Iffffff@a?J????i?L]??????Unknown
?%HostReadVariableOp"(sequential/dense_2/MatMul/ReadVariableOp(1      @9      @A      @I      @aٌ?Z??i|?-@?????Unknown
j&HostMean"binary_crossentropy/Mean(1333333@9333333@A333333@I333333@a??C
??i5???????Unknown
`'HostGatherV2"
GatherV2_1(1      @9      @A      @I      @ar֊???i?m?l????Unknown
?(HostDataset"/Iterator::Model::ParallelMapV2::Zip[0]::FlatMap(1?????J@9?????J@A      @I      @ar֊???i?騑E????Unknown
v)HostSum"%binary_crossentropy/weighted_loss/Sum(1      @9      @A      @I      @ar֊???i:f=f????Unknown
?*HostSelect"8gradient_tape/binary_crossentropy/logistic_loss/Select_2(1333333@9333333@A333333@I333333@aHZ-?B?i?wSX?????Unknown
v+HostMul"%binary_crossentropy/logistic_loss/mul(1333333@9333333@A333333@I333333@a???@{??i?}-??????Unknown
?,HostDataset"OIterator::Model::ParallelMapV2::Zip[0]::FlatMap[0]::Concatenate[0]::TensorSlice(1ffffff@9ffffff@Affffff@Iffffff@a?'fs+??i???a????Unknown
?-HostDataset"AIterator::Model::ParallelMapV2::Zip[1]::ForeverRepeat::FromTensor(1ffffff@9ffffff@Affffff@Iffffff@a?'fs+??i$??F????Unknown
q.HostCast"sequential/dropout/dropout/Cast(1??????@9??????@A??????@I??????@a???ۮ?ii????????Unknown
o/HostReadVariableOp"Adam/ReadVariableOp(1333333@9333333@A333333@I333333@ay?Y??0?i8?_Cn????Unknown
0HostReluGrad")gradient_tape/sequential/dense_1/ReluGrad(1333333@9333333@A333333@I333333@ay?Y??0?i???????Unknown
}1HostMatMul")gradient_tape/sequential/dense_2/MatMul_1(1ffffff@9ffffff@Affffff@Iffffff@aPq??c4?i?il?????Unknown
?2HostSelect"8gradient_tape/binary_crossentropy/logistic_loss/Select_3(1      @9      @A      @I      @a<?M<??iY??W????Unknown
o3HostMul"sequential/dropout/dropout/Mul(1      @9      @A      @I      @a<?M<??i????????Unknown
u4HostReadVariableOp"div_no_nan/ReadVariableOp(1ffffff@9ffffff@Affffff@Iffffff@a7?=???iI@??????Unknown
t5HostAssignAddVariableOp"AssignAddVariableOp(1??????@9??????@A??????@I??????@a?xAW?;?iU?b}????Unknown
V6HostCast"Cast(1??????@9??????@A??????@I??????@a?xAW?;?ia??[?????Unknown
?7HostBiasAddGrad"2gradient_tape/sequential/dense/BiasAdd/BiasAddGrad(1??????@9??????@A??????@I??????@a麒p???i?iH<????Unknown
v8HostAssignAddVariableOp"AssignAddVariableOp_2(1      @9      @A      @I      @a????t??iVD?????Unknown
?9HostBiasAddGrad"4gradient_tape/sequential/dense_1/BiasAdd/BiasAddGrad(1      @9      @A      @I      @a????t??i7???P????Unknown
~:HostSelect"*binary_crossentropy/logistic_loss/Select_1(1333333@9333333@A333333@I333333@a?>5?L??i??J?????Unknown
?;HostGreaterEqual")sequential/dropout_1/dropout/GreaterEqual(1??????	@9??????	@A??????	@I??????	@a-??????i?m?qT????Unknown
v<HostSub"%binary_crossentropy/logistic_loss/sub(1??????@9??????@A??????@I??????@a	Rީ??i?椨?????Unknown
?=HostAddV2"3gradient_tape/binary_crossentropy/logistic_loss/add(1??????@9??????@A??????@I??????@a	Rީ??i/`L?H????Unknown
?>HostDivNoNan"@gradient_tape/binary_crossentropy/weighted_loss/value/div_no_nan(1??????@9??????@A??????@I??????@a	Rީ??iw???????Unknown
}?HostReluGrad"'gradient_tape/sequential/dense/ReluGrad(1      @9      @A      @I      @aٌ?Z??iI\[9????Unknown
V@HostAddN"AddN(1333333@9333333@A333333@I333333@a??C
??i?+???????Unknown
sAHostCast"!sequential/dropout_1/dropout/Cast(1333333@9333333@A333333@I333333@a??C
??i:?????Unknown
tBHostReadVariableOp"Adam/Cast/ReadVariableOp(1ffffff@9ffffff@Affffff@Iffffff@a??9v???i??f?????Unknown
]CHostCast"Adam/Cast_1(1ffffff@9ffffff@Affffff@Iffffff@a??9v???i?????????Unknown
rDHostAdd"!binary_crossentropy/logistic_loss(1ffffff@9ffffff@Affffff@Iffffff@a??9v???i??k,i????Unknown
zEHostLog1p"'binary_crossentropy/logistic_loss/Log1p(1ffffff@9ffffff@Affffff@Iffffff@a??9v???i??U??????Unknown
[FHostPow"
Adam/Pow_1(1??????@9??????@A??????@I??????@a4?~??	?i??>????Unknown
?GHostReadVariableOp")sequential/dense_1/BiasAdd/ReadVariableOp(1??????@9??????@A??????@I??????@a4?~??	?i?y,??????Unknown
~HHostMaximum")gradient_tape/binary_crossentropy/Maximum(1      @9      @A      @I      @a
 !ˣ?i?X????Unknown
?IHostSelect"6gradient_tape/binary_crossentropy/logistic_loss/Select(1      @9      @A      @I      @a
 !ˣ?i?ꄮi????Unknown
~JHostRealDiv")gradient_tape/binary_crossentropy/truediv(1333333@9333333@A333333@I333333@a???@{??i??qL?????Unknown
~KHostAssignAddVariableOp"Adam/Adam/AssignAddVariableOp(1??????@9??????@A??????@I??????@a???ۮ?iɅ?????Unknown
vLHostNeg"%binary_crossentropy/logistic_loss/Neg(1??????@9??????@A??????@I??????@a???ۮ?i?O?u????Unknown
?MHostReadVariableOp"'sequential/dense/BiasAdd/ReadVariableOp(1       @9       @A       @I       @a<?M<??i#K???????Unknown
?NHostReadVariableOp")sequential/dense_2/BiasAdd/ReadVariableOp(1       @9       @A       @I       @a<?M<??iZx/u????Unknown
vOHostExp"%binary_crossentropy/logistic_loss/Exp(1????????9????????A????????I????????a麒p???i?:?kZ????Unknown
?PHostGreaterEqual".binary_crossentropy/logistic_loss/GreaterEqual(1333333??9333333??A333333??I333333??a?>5?L? ?iz??p?????Unknown
aQHostIdentity"Identity(1ffffff??9ffffff??Affffff??Iffffff??a??9v???>i??H??????Unknown?
?RHost	ZerosLike":gradient_tape/binary_crossentropy/logistic_loss/zeros_like(1????????9????????A????????I????????a???ۮ?>i?????????Unknown*?N
uHostFlushSummaryWriter"FlushSummaryWriter(1ffff??@9ffff??@Affff??@Iffff??@a?ڭ|??i?ڭ|???Unknown?
?HostRandomUniform"7sequential/dropout/dropout/random_uniform/RandomUniform(1??????P@9??????P@A??????P@I??????P@a???V?i??ݵU????Unknown
?HostResourceApplyAdam"$Adam/Adam/update_2/ResourceApplyAdam(133333?N@933333?N@A33333?N@I33333?N@a???gwT?i??ii?????Unknown
iHostWriteSummary"WriteSummary(1333333K@9333333K@A333333K@I333333K@a??x?"R?i??9s?????Unknown?
?HostDataset"?Iterator::Model::ParallelMapV2::Zip[0]::FlatMap[0]::Concatenate(1?????YG@9?????YG@A?????E@I?????E@a4`??L?iJᱦ????Unknown
oHost_FusedMatMul"sequential/dense/Relu(1?????YC@9?????YC@A?????YC@I?????YC@a?E)??I?i?L??????Unknown
?HostResourceApplyAdam""Adam/Adam/update/ResourceApplyAdam(133333?A@933333?A@A33333?A@I33333?A@a?Mr???G?in?ݖ????Unknown
?HostRandomUniform"9sequential/dropout_1/dropout/random_uniform/RandomUniform(1     @@@9     @@@A     @@@I     @@@a(3cU??E?i;3=?????Unknown
?	HostDataset"5Iterator::Model::ParallelMapV2::Zip[1]::ForeverRepeat(1ffffff;@9ffffff;@A??????6@I??????6@a?U?Nf>?i??M????Unknown
?
HostResourceApplyAdam"$Adam/Adam/update_5/ResourceApplyAdam(1      4@9      4@A      4@I      4@aYffU??:?i?@?Y?????Unknown
?HostResourceApplyAdam"$Adam/Adam/update_4/ResourceApplyAdam(1fffff?2@9fffff?2@Afffff?2@Ifffff?2@a[?M
39?i????Ƚ???Unknown
xHostDataset"#Iterator::Model::ParallelMapV2::Zip(133333?W@933333?W@Affffff/@Iffffff/@a???/??4?i^?G?f????Unknown
dHostDataset"Iterator::Model(1?????L9@9?????L9@A??????.@I??????.@a???Vf4?i\
d?????Unknown
gHostStridedSlice"strided_slice(1??????.@9??????.@A??????.@I??????.@a???Vf4?iZ??.?????Unknown
{HostMatMul"'gradient_tape/sequential/dense_2/MatMul(1      -@9      -@A      -@I      -@ag=??EU3?i?d???????Unknown
{HostMatMul"'gradient_tape/sequential/dense_1/MatMul(1??????)@9??????)@A??????)@I??????)@a?"?i1?i???????Unknown
}HostMatMul")gradient_tape/sequential/dense_1/MatMul_1(1??????)@9??????)@A??????)@I??????)@a?"?i1?ij?b/????Unknown
yHostMatMul"%gradient_tape/sequential/dense/MatMul(1??????'@9??????'@A??????'@I??????'@a?t?X??/?i?h??*????Unknown
qHost_FusedMatMul"sequential/dense_1/Relu(1??????'@9??????'@A??????'@I??????'@a?t?X??/?i????&????Unknown
^HostGatherV2"GatherV2(1ffffff'@9ffffff'@Affffff'@Iffffff'@a???=3/?i"?Q?????Unknown
eHost
LogicalAnd"
LogicalAnd(1??????&@9??????&@A??????&@I??????&@a?U?Nf.?i3# ????Unknown?
?HostResourceApplyAdam"$Adam/Adam/update_1/ResourceApplyAdam(1333333&@9333333&@A333333&@I333333&@aS?끙-?i??Q??????Unknown
[HostAddV2"Adam/add(1333333&@9333333&@A333333&@I333333&@aS?끙-?i	?pS?????Unknown
?HostResourceApplyAdam"$Adam/Adam/update_3/ResourceApplyAdam(1??????%@9??????%@A??????%@I??????%@a=7I??-?i??c?????Unknown
sHostDataset"Iterator::Model::ParallelMapV2(1      $@9      $@A      $@I      $@aYffU??*?i?b/????Unknown
tHost_FusedMatMul"sequential/dense_2/BiasAdd(1??????!@9??????!@A??????!@I??????!@a?O??dw'?i?????????Unknown
lHostIteratorGetNext"IteratorGetNext(1ffffff@9ffffff@Affffff@Iffffff@aN9?4D$?i????????Unknown
|HostSelect"(binary_crossentropy/logistic_loss/Select(1      @9      @A      @I      @a?? ??#?i????*????Unknown
?HostDynamicStitch"/gradient_tape/binary_crossentropy/DynamicStitch(1      @9      @A      @I      @a?? ??#?i????j????Unknown
?HostTile"6gradient_tape/binary_crossentropy/weighted_loss/Tile_1(1333333@9333333@A333333@I333333@a????gw#?i?&m:?????Unknown
?HostBiasAddGrad"4gradient_tape/sequential/dense_2/BiasAdd/BiasAddGrad(1      @9      @A      @I      @aS??wGU!?i??䎷????Unknown
Y HostPow"Adam/Pow(1ffffff@9ffffff@Affffff@Iffffff@a'??@7D ?i?Xһ????Unknown
?!HostCast"Tbinary_crossentropy/ArithmeticOptimizer/ReorderCastLikeAndValuePreserving_int64_Cast(1ffffff@9ffffff@Affffff@Iffffff@a'??@7D ?iY???????Unknown
?"HostGreaterEqual"'sequential/dropout/dropout/GreaterEqual(1ffffff@9ffffff@Affffff@Iffffff@a'??@7D ?i??@Y?????Unknown
?#HostReadVariableOp"(sequential/dense_2/MatMul/ReadVariableOp(1      @9      @A      @I      @a8?zf???i~?sX?????Unknown
j$HostMean"binary_crossentropy/Mean(1333333@9333333@A333333@I333333@a/?/???ig|%ϻ????Unknown
`%HostGatherV2"
GatherV2_1(1      @9      @A      @I      @aȣ??=U?i?ky?????Unknown
?&HostDataset"/Iterator::Model::ParallelMapV2::Zip[0]::FlatMap(1?????J@9?????J@A      @I      @aȣ??=U?iq[#?????Unknown
v'HostSum"%binary_crossentropy/weighted_loss/Sum(1      @9      @A      @I      @aȣ??=U?i?J??{????Unknown
?(HostSelect"8gradient_tape/binary_crossentropy/logistic_loss/Select_2(1333333@9333333@A333333@I333333@a??R?-D?i??_?]????Unknown
v)HostMul"%binary_crossentropy/logistic_loss/mul(1333333@9333333@A333333@I333333@a,?????i?{??*????Unknown
?*HostDataset"OIterator::Model::ParallelMapV2::Zip[0]::FlatMap[0]::Concatenate[0]::TensorSlice(1ffffff@9ffffff@Affffff@Iffffff@a?+?t??i,?/??????Unknown
?+HostDataset"AIterator::Model::ParallelMapV2::Zip[1]::ForeverRepeat::FromTensor(1ffffff@9ffffff@Affffff@Iffffff@a?+?t??i???A?????Unknown
q,HostCast"sequential/dropout/dropout/Cast(1??????@9??????@A??????@I??????@a?O??dw?i????n????Unknown
o-HostReadVariableOp"Adam/ReadVariableOp(1333333@9333333@A333333@I333333@a?v>????i?<?s&????Unknown
.HostReluGrad")gradient_tape/sequential/dense_1/ReluGrad(1333333@9333333@A333333@I333333@a?v>????i?????????Unknown
}/HostMatMul")gradient_tape/sequential/dense_2/MatMul_1(1ffffff@9ffffff@Affffff@Iffffff@a?Ġ_???i??(ٌ????Unknown
?0HostSelect"8gradient_tape/binary_crossentropy/logistic_loss/Select_3(1      @9      @A      @I      @az?QDDU?ikK?7????Unknown
o1HostMul"sequential/dropout/dropout/Mul(1      @9      @A      @I      @az?QDDU?i?0m-?????Unknown
u2HostReadVariableOp"div_no_nan/ReadVariableOp(1ffffff@9ffffff@Affffff@Iffffff@aN9?4D?i??O?????Unknown
t3HostAssignAddVariableOp"AssignAddVariableOp(1??????@9??????@A??????@I??????@a8`e????i?1m,"????Unknown
V4HostCast"Cast(1??????@9??????@A??????@I??????@a8`e????i???	?????Unknown
?5HostBiasAddGrad"2gradient_tape/sequential/dense/BiasAdd/BiasAddGrad(1??????@9??????@A??????@I??????@a!??#3?i?}??Y????Unknown
v6HostAssignAddVariableOp"AssignAddVariableOp_2(1      @9      @A      @I      @a?ǻ???i?[???????Unknown
?7HostBiasAddGrad"4gradient_tape/sequential/dense_1/BiasAdd/BiasAddGrad(1      @9      @A      @I      @a?ǻ???i :?L?????Unknown
~8HostSelect"*binary_crossentropy/logistic_loss/Select_1(1333333@9333333@A333333@I333333@a??x?"?i?=D]????Unknown
?9HostGreaterEqual")sequential/dropout_1/dropout/GreaterEqual(1??????	@9??????	@A??????	@I??????	@a?"?i?i??_??????Unknown
v:HostSub"%binary_crossentropy/logistic_loss/sub(1??????@9??????@A??????@I??????@a?I?N{??i":)"????Unknown
?;HostAddV2"3gradient_tape/binary_crossentropy/logistic_loss/add(1??????@9??????@A??????@I??????@a?I?N{??i?um?????Unknown
?<HostDivNoNan"@gradient_tape/binary_crossentropy/weighted_loss/value/div_no_nan(1??????@9??????@A??????@I??????@a?I?N{??i????*????Unknown
}=HostReluGrad"'gradient_tape/sequential/dense/ReluGrad(1      @9      @A      @I      @a8?zf???i҃???????Unknown
V>HostAddN"AddN(1333333@9333333@A333333@I333333@a/?/???iGC?k&????Unknown
s?HostCast"!sequential/dropout_1/dropout/Cast(1333333@9333333@A333333@I333333@a/?/???i?:'?????Unknown
t@HostReadVariableOp"Adam/Cast/ReadVariableOp(1ffffff@9ffffff@Affffff@Iffffff@a?|?????i??Q?????Unknown
]AHostCast"Adam/Cast_1(1ffffff@9ffffff@Affffff@Iffffff@a?|?????i??i?????Unknown
rBHostAdd"!binary_crossentropy/logistic_loss(1ffffff@9ffffff@Affffff@Iffffff@a?|?????i????????Unknown
zCHostLog1p"'binary_crossentropy/logistic_loss/Log1p(1ffffff@9ffffff@Affffff@Iffffff@a?|?????i????????Unknown
[DHostPow"
Adam/Pow_1(1??????@9??????@A??????@I??????@a?????i??/??????Unknown
?EHostReadVariableOp")sequential/dense_1/BiasAdd/ReadVariableOp(1??????@9??????@A??????@I??????@a?????i????]????Unknown
~FHostMaximum")gradient_tape/binary_crossentropy/Maximum(1      @9      @A      @I      @aYffU??
?inL??????Unknown
?GHostSelect"6gradient_tape/binary_crossentropy/logistic_loss/Select(1      @9      @A      @I      @aYffU??
?i?p53????Unknown
~HHostRealDiv")gradient_tape/binary_crossentropy/truediv(1333333@9333333@A333333@I333333@a,????	?i+???????Unknown
~IHostAssignAddVariableOp"Adam/Adam/AssignAddVariableOp(1??????@9??????@A??????@I??????@a?O??dw?i`?y?????Unknown
vJHostNeg"%binary_crossentropy/logistic_loss/Neg(1??????@9??????@A??????@I??????@a?O??dw?i???VU????Unknown
?KHostReadVariableOp"'sequential/dense/BiasAdd/ReadVariableOp(1       @9       @A       @I       @az?QDDU?iݺ???????Unknown
?LHostReadVariableOp")sequential/dense_2/BiasAdd/ReadVariableOp(1       @9       @A       @I       @az?QDDU?i%??  ????Unknown
vMHostExp"%binary_crossentropy/logistic_loss/Exp(1????????9????????A????????I????????a!??#3?i(\?L????Unknown
?NHostGreaterEqual".binary_crossentropy/logistic_loss/GreaterEqual(1333333??9333333??A333333??I333333??a??x?"?ib??U?????Unknown
aOHostIdentity"Identity(1ffffff??9ffffff??Affffff??Iffffff??a?|?????>i??6?????Unknown?
?PHost	ZerosLike":gradient_tape/binary_crossentropy/logistic_loss/zeros_like(1????????9????????A????????I????????a?O??dw?>i?????????Unknown