<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1Beta2;

class Clusters
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Shared::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aec410a2c676f6f676c652f636c6f75642f6461746170726f632f763162" .
            "657461322f636c7573746572732e70726f746f121d676f6f676c652e636c" .
            "6f75642e6461746170726f632e763162657461321a17676f6f676c652f61" .
            "70692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669" .
            "656c645f6265686176696f722e70726f746f1a19676f6f676c652f617069" .
            "2f7265736f757263652e70726f746f1a2a676f6f676c652f636c6f75642f" .
            "6461746170726f632f763162657461322f7368617265642e70726f746f1a" .
            "23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e73" .
            "2e70726f746f1a1e676f6f676c652f70726f746f6275662f647572617469" .
            "6f6e2e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c" .
            "645f6d61736b2e70726f746f1a1f676f6f676c652f70726f746f6275662f" .
            "74696d657374616d702e70726f746f22e6030a07436c757374657212170a" .
            "0a70726f6a6563745f69641801200128094203e0410212190a0c636c7573" .
            "7465725f6e616d651802200128094203e0410212410a06636f6e66696718" .
            "032001280b322c2e676f6f676c652e636c6f75642e6461746170726f632e" .
            "763162657461322e436c7573746572436f6e6669674203e0410212470a06" .
            "6c6162656c7318082003280b32322e676f6f676c652e636c6f75642e6461" .
            "746170726f632e763162657461322e436c75737465722e4c6162656c7345" .
            "6e7472794203e0410112410a0673746174757318042001280b322c2e676f" .
            "6f676c652e636c6f75642e6461746170726f632e763162657461322e436c" .
            "75737465725374617475734203e0410312490a0e7374617475735f686973" .
            "746f727918072003280b322c2e676f6f676c652e636c6f75642e64617461" .
            "70726f632e763162657461322e436c75737465725374617475734203e041" .
            "0312190a0c636c75737465725f757569641806200128094203e041031243" .
            "0a076d65747269637318092001280b322d2e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e763162657461322e436c75737465724d65747269" .
            "63734203e041031a2d0a0b4c6162656c73456e747279120b0a036b657918" .
            "0120012809120d0a0576616c75651802200128093a02380122af070a0d43" .
            "6c7573746572436f6e666967121a0a0d636f6e6669675f6275636b657418" .
            "01200128094203e0410112500a126763655f636c75737465725f636f6e66" .
            "696718082001280b322f2e676f6f676c652e636c6f75642e646174617072" .
            "6f632e763162657461322e476365436c7573746572436f6e6669674203e0" .
            "4101124e0a0d6d61737465725f636f6e66696718092001280b32322e676f" .
            "6f676c652e636c6f75642e6461746170726f632e763162657461322e496e" .
            "7374616e636547726f7570436f6e6669674203e04101124e0a0d776f726b" .
            "65725f636f6e666967180a2001280b32322e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e763162657461322e496e7374616e636547726f75" .
            "70436f6e6669674203e0410112580a177365636f6e646172795f776f726b" .
            "65725f636f6e666967180c2001280b32322e676f6f676c652e636c6f7564" .
            "2e6461746170726f632e763162657461322e496e7374616e636547726f75" .
            "70436f6e6669674203e04101124b0a0f736f6674776172655f636f6e6669" .
            "67180d2001280b322d2e676f6f676c652e636c6f75642e6461746170726f" .
            "632e763162657461322e536f667477617265436f6e6669674203e0410112" .
            "4d0a106c6966656379636c655f636f6e666967180e2001280b322e2e676f" .
            "6f676c652e636c6f75642e6461746170726f632e763162657461322e4c69" .
            "66656379636c65436f6e6669674203e04101125c0a16696e697469616c69" .
            "7a6174696f6e5f616374696f6e73180b2003280b32372e676f6f676c652e" .
            "636c6f75642e6461746170726f632e763162657461322e4e6f6465496e69" .
            "7469616c697a6174696f6e416374696f6e4203e04101124f0a11656e6372" .
            "797074696f6e5f636f6e666967180f2001280b322f2e676f6f676c652e63" .
            "6c6f75642e6461746170726f632e763162657461322e456e637279707469" .
            "6f6e436f6e6669674203e0410112510a126175746f7363616c696e675f63" .
            "6f6e66696718102001280b32302e676f6f676c652e636c6f75642e646174" .
            "6170726f632e763162657461322e4175746f7363616c696e67436f6e6669" .
            "674203e04101124b0a0f656e64706f696e745f636f6e6669671811200128" .
            "0b322d2e676f6f676c652e636c6f75642e6461746170726f632e76316265" .
            "7461322e456e64706f696e74436f6e6669674203e04101124b0a0f736563" .
            "75726974795f636f6e66696718122001280b322d2e676f6f676c652e636c" .
            "6f75642e6461746170726f632e763162657461322e536563757269747943" .
            "6f6e6669674203e0410122bf010a0e456e64706f696e74436f6e66696712" .
            "550a0a687474705f706f72747318012003280b323c2e676f6f676c652e63" .
            "6c6f75642e6461746170726f632e763162657461322e456e64706f696e74" .
            "436f6e6669672e48747470506f727473456e7472794203e0410312240a17" .
            "656e61626c655f687474705f706f72745f61636365737318022001280842" .
            "03e041011a300a0e48747470506f727473456e747279120b0a036b657918" .
            "0120012809120d0a0576616c75651802200128093a023801222c0a114175" .
            "746f7363616c696e67436f6e66696712170a0a706f6c6963795f75726918" .
            "01200128094203e0410122340a10456e6372797074696f6e436f6e666967" .
            "12200a136763655f70645f6b6d735f6b65795f6e616d6518012001280942" .
            "03e0410122a9030a10476365436c7573746572436f6e66696712150a087a" .
            "6f6e655f7572691801200128094203e0410112180a0b6e6574776f726b5f" .
            "7572691802200128094203e04101121b0a0e7375626e6574776f726b5f75" .
            "72691806200128094203e04101121d0a10696e7465726e616c5f69705f6f" .
            "6e6c791807200128084203e04101121c0a0f736572766963655f6163636f" .
            "756e741808200128094203e0410112230a16736572766963655f6163636f" .
            "756e745f73636f7065731803200328094203e04101120c0a047461677318" .
            "0420032809124f0a086d6574616461746118052003280b323d2e676f6f67" .
            "6c652e636c6f75642e6461746170726f632e763162657461322e47636543" .
            "6c7573746572436f6e6669672e4d65746164617461456e74727912550a14" .
            "7265736572766174696f6e5f616666696e697479180b2001280b32322e67" .
            "6f6f676c652e636c6f75642e6461746170726f632e763162657461322e52" .
            "65736572766174696f6e416666696e6974794203e041011a2f0a0d4d6574" .
            "6164617461456e747279120b0a036b6579180120012809120d0a0576616c" .
            "75651802200128093a02380122a4030a13496e7374616e636547726f7570" .
            "436f6e666967121a0a0d6e756d5f696e7374616e63657318012001280542" .
            "03e04101121b0a0e696e7374616e63655f6e616d65731802200328094203" .
            "e0410312160a09696d6167655f7572691803200128094203e04101121d0a" .
            "106d616368696e655f747970655f7572691804200128094203e041011243" .
            "0a0b6469736b5f636f6e66696718052001280b32292e676f6f676c652e63" .
            "6c6f75642e6461746170726f632e763162657461322e4469736b436f6e66" .
            "69674203e04101121b0a0e69735f707265656d707469626c651806200128" .
            "084203e0410112540a146d616e616765645f67726f75705f636f6e666967" .
            "18072001280b32312e676f6f676c652e636c6f75642e6461746170726f63" .
            "2e763162657461322e4d616e6167656447726f7570436f6e6669674203e0" .
            "4103124b0a0c616363656c657261746f727318082003280b32302e676f6f" .
            "676c652e636c6f75642e6461746170726f632e763162657461322e416363" .
            "656c657261746f72436f6e6669674203e0410112180a106d696e5f637075" .
            "5f706c6174666f726d18092001280922630a124d616e6167656447726f75" .
            "70436f6e66696712230a16696e7374616e63655f74656d706c6174655f6e" .
            "616d651801200128094203e0410312280a1b696e7374616e63655f67726f" .
            "75705f6d616e616765725f6e616d651802200128094203e04103224c0a11" .
            "416363656c657261746f72436f6e666967121c0a14616363656c65726174" .
            "6f725f747970655f75726918012001280912190a11616363656c65726174" .
            "6f725f636f756e7418022001280522610a0a4469736b436f6e666967121b" .
            "0a0e626f6f745f6469736b5f747970651803200128094203e04101121e0a" .
            "11626f6f745f6469736b5f73697a655f67621801200128054203e0410112" .
            "160a0e6e756d5f6c6f63616c5f737364731802200128052283020a0f4c69" .
            "66656379636c65436f6e66696712370a0f69646c655f64656c6574655f74" .
            "746c18012001280b32192e676f6f676c652e70726f746f6275662e447572" .
            "6174696f6e4203e04101123b0a106175746f5f64656c6574655f74696d65" .
            "18022001280b321a2e676f6f676c652e70726f746f6275662e54696d6573" .
            "74616d704203e04101480012390a0f6175746f5f64656c6574655f74746c" .
            "18032001280b32192e676f6f676c652e70726f746f6275662e4475726174" .
            "696f6e4203e04101480012380a0f69646c655f73746172745f74696d6518" .
            "042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d704203e0410342050a0374746c22580a0e5365637572697479436f6e" .
            "66696712460a0f6b65726265726f735f636f6e66696718012001280b322d" .
            "2e676f6f676c652e636c6f75642e6461746170726f632e76316265746132" .
            "2e4b65726265726f73436f6e6669672290040a0e4b65726265726f73436f" .
            "6e666967121c0a0f656e61626c655f6b65726265726f7318012001280842" .
            "03e0410112280a1b726f6f745f7072696e636970616c5f70617373776f72" .
            "645f7572691802200128094203e0410212180a0b6b6d735f6b65795f7572" .
            "691803200128094203e0410212190a0c6b657973746f72655f7572691804" .
            "200128094203e04101121b0a0e747275737473746f72655f757269180520" .
            "0128094203e0410112220a156b657973746f72655f70617373776f72645f" .
            "7572691806200128094203e04101121d0a106b65795f70617373776f7264" .
            "5f7572691807200128094203e0410112240a17747275737473746f72655f" .
            "70617373776f72645f7572691808200128094203e0410112240a1763726f" .
            "73735f7265616c6d5f74727573745f7265616c6d1809200128094203e041" .
            "0112220a1563726f73735f7265616c6d5f74727573745f6b6463180a2001" .
            "28094203e04101122b0a1e63726f73735f7265616c6d5f74727573745f61" .
            "646d696e5f736572766572180b200128094203e0410112320a2563726f73" .
            "735f7265616c6d5f74727573745f7368617265645f70617373776f72645f" .
            "757269180c200128094203e04101121b0a0e6b64635f64625f6b65795f75" .
            "7269180d200128094203e04101121f0a127467745f6c69666574696d655f" .
            "686f757273180e200128054203e0410112120a057265616c6d180f200128" .
            "094203e0410122730a184e6f6465496e697469616c697a6174696f6e4163" .
            "74696f6e121c0a0f65786563757461626c655f66696c6518012001280942" .
            "03e0410212390a11657865637574696f6e5f74696d656f75741802200128" .
            "0b32192e676f6f676c652e70726f746f6275662e4475726174696f6e4203" .
            "e04101228b030a0d436c757374657253746174757312460a057374617465" .
            "18012001280e32322e676f6f676c652e636c6f75642e6461746170726f63" .
            "2e763162657461322e436c75737465725374617475732e53746174654203" .
            "e0410312130a0664657461696c1802200128094203e0410312390a107374" .
            "6174655f73746172745f74696d6518032001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d704203e04103124c0a08737562" .
            "737461746518042001280e32352e676f6f676c652e636c6f75642e646174" .
            "6170726f632e763162657461322e436c75737465725374617475732e5375" .
            "6273746174654203e0410322560a055374617465120b0a07554e4b4e4f57" .
            "4e1000120c0a084352454154494e471001120b0a0752554e4e494e471002" .
            "12090a054552524f521003120c0a0844454c4554494e471004120c0a0855" .
            "50444154494e471005223c0a085375627374617465120f0a0b554e535045" .
            "4349464945441000120d0a09554e4845414c544859100112100a0c535441" .
            "4c455f535441545553100222fe010a0e536f667477617265436f6e666967" .
            "121a0a0d696d6167655f76657273696f6e1801200128094203e041011256" .
            "0a0a70726f7065727469657318022003280b323d2e676f6f676c652e636c" .
            "6f75642e6461746170726f632e763162657461322e536f66747761726543" .
            "6f6e6669672e50726f70657274696573456e7472794203e0410112450a13" .
            "6f7074696f6e616c5f636f6d706f6e656e747318032003280e32282e676f" .
            "6f676c652e636c6f75642e6461746170726f632e763162657461322e436f" .
            "6d706f6e656e741a310a0f50726f70657274696573456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a02380122a4" .
            "020a0e436c75737465724d65747269637312540a0c686466735f6d657472" .
            "69637318012003280b323e2e676f6f676c652e636c6f75642e6461746170" .
            "726f632e763162657461322e436c75737465724d6574726963732e486466" .
            "734d657472696373456e74727912540a0c7961726e5f6d65747269637318" .
            "022003280b323e2e676f6f676c652e636c6f75642e6461746170726f632e" .
            "763162657461322e436c75737465724d6574726963732e5961726e4d6574" .
            "72696373456e7472791a320a10486466734d657472696373456e74727912" .
            "0b0a036b6579180120012809120d0a0576616c75651802200128033a0238" .
            "011a320a105961726e4d657472696373456e747279120b0a036b65791801" .
            "20012809120d0a0576616c75651802200128033a023801229b010a144372" .
            "65617465436c75737465725265717565737412170a0a70726f6a6563745f" .
            "69641801200128094203e0410212130a06726567696f6e18032001280942" .
            "03e04102123c0a07636c757374657218022001280b32262e676f6f676c65" .
            "2e636c6f75642e6461746170726f632e763162657461322e436c75737465" .
            "724203e0410212170a0a726571756573745f69641804200128094203e041" .
            "0122b3020a14557064617465436c75737465725265717565737412170a0a" .
            "70726f6a6563745f69641801200128094203e0410212130a06726567696f" .
            "6e1805200128094203e0410212190a0c636c75737465725f6e616d651802" .
            "200128094203e04102123c0a07636c757374657218032001280b32262e67" .
            "6f6f676c652e636c6f75642e6461746170726f632e763162657461322e43" .
            "6c75737465724203e0410212450a1d677261636566756c5f6465636f6d6d" .
            "697373696f6e5f74696d656f757418062001280b32192e676f6f676c652e" .
            "70726f746f6275662e4475726174696f6e4203e0410112340a0b75706461" .
            "74655f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275" .
            "662e4669656c644d61736b4203e0410212170a0a726571756573745f6964" .
            "1807200128094203e041012293010a1444656c657465436c757374657252" .
            "65717565737412170a0a70726f6a6563745f69641801200128094203e041" .
            "0212130a06726567696f6e1803200128094203e0410212190a0c636c7573" .
            "7465725f6e616d651802200128094203e0410212190a0c636c7573746572" .
            "5f757569641804200128094203e0410112170a0a726571756573745f6964" .
            "1805200128094203e04101225c0a11476574436c75737465725265717565" .
            "737412170a0a70726f6a6563745f69641801200128094203e0410212130a" .
            "06726567696f6e1803200128094203e0410212190a0c636c75737465725f" .
            "6e616d651802200128094203e041022289010a134c697374436c75737465" .
            "72735265717565737412170a0a70726f6a6563745f696418012001280942" .
            "03e0410212130a06726567696f6e1804200128094203e0410212130a0666" .
            "696c7465721805200128094203e0410112160a09706167655f73697a6518" .
            "02200128054203e0410112170a0a706167655f746f6b656e180320012809" .
            "4203e0410122730a144c697374436c757374657273526573706f6e736512" .
            "3d0a08636c75737465727318012003280b32262e676f6f676c652e636c6f" .
            "75642e6461746170726f632e763162657461322e436c75737465724203e0" .
            "4103121c0a0f6e6578745f706167655f746f6b656e1802200128094203e0" .
            "410322610a16446961676e6f7365436c7573746572526571756573741217" .
            "0a0a70726f6a6563745f69641801200128094203e0410212130a06726567" .
            "696f6e1803200128094203e0410212190a0c636c75737465725f6e616d65" .
            "1802200128094203e0410222310a16446961676e6f7365436c7573746572" .
            "526573756c747312170a0a6f75747075745f7572691801200128094203e0" .
            "410322fd010a135265736572766174696f6e416666696e697479125e0a18" .
            "636f6e73756d655f7265736572766174696f6e5f7479706518012001280e" .
            "32372e676f6f676c652e636c6f75642e6461746170726f632e7631626574" .
            "61322e5265736572766174696f6e416666696e6974792e547970654203e0" .
            "410112100a036b65791802200128094203e0410112130a0676616c756573" .
            "1803200328094203e04101225f0a045479706512140a10545950455f554e" .
            "535045434946494544100012120a0e4e4f5f5245534552564154494f4e10" .
            "0112130a0f414e595f5245534552564154494f4e100212180a1453504543" .
            "494649435f5245534552564154494f4e100332e70d0a11436c7573746572" .
            "436f6e74726f6c6c65721291020a0d437265617465436c75737465721233" .
            "2e676f6f676c652e636c6f75642e6461746170726f632e76316265746132" .
            "2e437265617465436c7573746572526571756573741a1d2e676f6f676c65" .
            "2e6c6f6e6772756e6e696e672e4f7065726174696f6e22ab0182d3e49302" .
            "4322382f763162657461322f70726f6a656374732f7b70726f6a6563745f" .
            "69647d2f726567696f6e732f7b726567696f6e7d2f636c7573746572733a" .
            "07636c7573746572da411b70726f6a6563745f69642c20726567696f6e2c" .
            "20636c7573746572ca41410a07436c75737465721236676f6f676c652e63" .
            "6c6f75642e6461746170726f632e763162657461322e436c75737465724f" .
            "7065726174696f6e4d6574616461746112bb020a0d557064617465436c75" .
            "7374657212332e676f6f676c652e636c6f75642e6461746170726f632e76" .
            "3162657461322e557064617465436c7573746572526571756573741a1d2e" .
            "676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22d5" .
            "0182d3e493025232472f763162657461322f70726f6a656374732f7b7072" .
            "6f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f636c75" .
            "73746572732f7b636c75737465725f6e616d657d3a07636c7573746572da" .
            "413670726f6a6563745f69642c20726567696f6e2c20636c75737465725f" .
            "6e616d652c20636c75737465722c207570646174655f6d61736bca41410a" .
            "07436c75737465721236676f6f676c652e636c6f75642e6461746170726f" .
            "632e763162657461322e436c75737465724f7065726174696f6e4d657461" .
            "6461746112aa020a0d44656c657465436c757374657212332e676f6f676c" .
            "652e636c6f75642e6461746170726f632e763162657461322e44656c6574" .
            "65436c7573746572526571756573741a1d2e676f6f676c652e6c6f6e6772" .
            "756e6e696e672e4f7065726174696f6e22c40182d3e49302492a472f7631" .
            "62657461322f70726f6a656374732f7b70726f6a6563745f69647d2f7265" .
            "67696f6e732f7b726567696f6e7d2f636c7573746572732f7b636c757374" .
            "65725f6e616d657dda412070726f6a6563745f69642c20726567696f6e2c" .
            "20636c75737465725f6e616d65ca414f0a15676f6f676c652e70726f746f" .
            "6275662e456d7074791236676f6f676c652e636c6f75642e646174617072" .
            "6f632e763162657461322e436c75737465724f7065726174696f6e4d6574" .
            "616461746112da010a0a476574436c757374657212302e676f6f676c652e" .
            "636c6f75642e6461746170726f632e763162657461322e476574436c7573" .
            "746572526571756573741a262e676f6f676c652e636c6f75642e64617461" .
            "70726f632e763162657461322e436c7573746572227282d3e49302491247" .
            "2f763162657461322f70726f6a656374732f7b70726f6a6563745f69647d" .
            "2f726567696f6e732f7b726567696f6e7d2f636c7573746572732f7b636c" .
            "75737465725f6e616d657dda412070726f6a6563745f69642c2072656769" .
            "6f6e2c20636c75737465725f6e616d6512eb010a0c4c697374436c757374" .
            "65727312322e676f6f676c652e636c6f75642e6461746170726f632e7631" .
            "62657461322e4c697374436c757374657273526571756573741a332e676f" .
            "6f676c652e636c6f75642e6461746170726f632e763162657461322e4c69" .
            "7374436c757374657273526573706f6e7365227282d3e493023a12382f76" .
            "3162657461322f70726f6a656374732f7b70726f6a6563745f69647d2f72" .
            "6567696f6e732f7b726567696f6e7d2f636c757374657273da411270726f" .
            "6a6563745f69642c20726567696f6eda411a70726f6a6563745f69642c20" .
            "726567696f6e2c2066696c74657212ba020a0f446961676e6f7365436c75" .
            "7374657212352e676f6f676c652e636c6f75642e6461746170726f632e76" .
            "3162657461322e446961676e6f7365436c7573746572526571756573741a" .
            "1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e" .
            "22d00182d3e493025522502f763162657461322f70726f6a656374732f7b" .
            "70726f6a6563745f69647d2f726567696f6e732f7b726567696f6e7d2f63" .
            "6c7573746572732f7b636c75737465725f6e616d657d3a646961676e6f73" .
            "653a012ada412070726f6a6563745f69642c20726567696f6e2c20636c75" .
            "737465725f6e616d65ca414f0a15676f6f676c652e70726f746f6275662e" .
            "456d7074791236676f6f676c652e636c6f75642e6461746170726f632e76" .
            "3162657461322e436c75737465724f7065726174696f6e4d657461646174" .
            "611a4bca41176461746170726f632e676f6f676c65617069732e636f6dd2" .
            "412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f61" .
            "7574682f636c6f75642d706c6174666f726d427b0a21636f6d2e676f6f67" .
            "6c652e636c6f75642e6461746170726f632e76316265746132420d436c75" .
            "737465727350726f746f50015a45676f6f676c652e676f6c616e672e6f72" .
            "672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f6461" .
            "746170726f632f763162657461323b6461746170726f63620670726f746f" .
            "33"
        ), true);

        static::$is_initialized = true;
    }
}
