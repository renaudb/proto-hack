<?hh // strict

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: exampleany.proto

class AnyTest implements \Protobuf\Message {
  public ?\google\protobuf\Any $any;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'any' => ?\google\protobuf\Any,
  ) $s = shape()) {
    $this->any = $s['any'] ?? null;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "AnyTest";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          if ($this->any == null) $this->any = new \google\protobuf\Any();
          $this->any->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $msg = $this->any;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 1);
    }
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeMessage('any', 'any', $this->any, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'any':
          if ($v === null) break;
          if ($this->any == null) $this->any = new \google\protobuf\Any();
          $this->any->MergeJsonFrom($v);
          break;
      }
    }
  }

  public function CopyFrom(\Protobuf\Message $o): \Errors\Error {
    if (!($o is AnyTest)) {
      return \Errors\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $tmp = $o->any;
    if ($tmp !== null) {
      $nv = new \google\protobuf\Any();
      $nv->CopyFrom($tmp);
      $this->any = $nv;
    }
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Errors\Ok();
  }
}


class XXX_FileDescriptor_exampleany__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'exampleany.proto';
  const string RAW =
  'eNriEkitSMwtyElNzKvUKyjKL8mXkkzPz0/PSdUH85JK0/ThUkqGXOyOeZUhqcUlQmpczI'
  .'l5lRKMCowa3EYiehA9ejA9eo55lUEgBUlsYCFjQAAAAP//K5EiUg';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
