# PHP SMS Amazon SNS AWS

A quick example of sending SMS with AWS SNS Using Amazon Service. 

### Output

#### var_dump output

```
object(Aws\Result)#119 (2) {
  ["data":"Aws\Result":private]=>
  array(2) {
    ["MessageId"]=>
    string(36) "854cdb34-5f30-****-*****-8cd571c539c1"
    ["@metadata"]=>
    array(4) {
      ["statusCode"]=>
      int(200)
      ["effectiveUri"]=>
      string(35) "https://sns.us-east-1.amazonaws.com"
      ["headers"]=>
      array(4) {
        ["x-amzn-requestid"]=>
        string(36) "630d3757-1004-****-*****-60b63ef14677"
        ["content-type"]=>
        string(8) "text/xml"
        ["content-length"]=>
        string(3) "294"
        ["date"]=>
        string(29) "Sun, 20 Sep 2020 10:19:33 GMT"
      }
      ["transferStats"]=>
      array(1) {
        ["http"]=>
        array(1) {
          [0]=>
          array(0) {
          }
        }
      }
    }
  }
  ["monitoringEvents":"Aws\Result":private]=>
  array(0) {
  }
}
```

#### print_r output

```
Aws\Result Object
(
    [data:Aws\Result:private] => Array
        (
            [MessageId] => 854cdb34-****-****-****-8cd571c539c1
            [@metadata] => Array
                (
                    [statusCode] => 200
                    [effectiveUri] => https://sns.us-east-1.amazonaws.com
                    [headers] => Array
                        (
                            [x-amzn-requestid] => 630d3757-****-****-****-60b63ef14677
                            [content-type] => text/xml
                            [content-length] => 294
                            [date] => Sun, 20 Sep 2020 10:19:33 GMT
                        )

                    [transferStats] => Array
                        (
                            [http] => Array
                                (
                                    [0] => Array
                                        (
                                        )

                                )

                        )

                )

        )

    [monitoringEvents:Aws\Result:private] => Array
        (
        )

)
```

---------

# Max Base

My nickname is Max, Programming language developer, Full-stack programmer. I love computer scientists, researchers, and compilers. ([Max Base](https://maxbase.org/))

## Asrez Team

A team includes some programmer, developer, designer, researcher(s) especially Max Base.

[Asrez Team](https://www.asrez.com/)

