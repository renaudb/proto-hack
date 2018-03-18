<?hh // strict

namespace Grpc {

class GrpcException extends \Exception {}

use \Protobuf\Message;

interface ClientConn {
	// TODO calloptions.
	public function Invoke(string $method, Message $in, Message $out): Awaitable<void>;
}

interface ServerDispatch {
	public function Name(): string;
	public function Dispatch(string $method, string $rawin): string;
}

} // namespace Grpc